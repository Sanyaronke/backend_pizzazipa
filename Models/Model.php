<?php

namespace App\Models;


/**
 * Model.php Model de nos bd
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 */
class Model extends DataLayer
{

    private $db;
    protected $table;
 
    /**
     * findAll cette methode Sélectionne de tous les enregistrements d'une table
     *
     * @param  string $entity l'entité de la base de donnée
     * @param  array $entityKeys les enregistrements à ne pas hydratter
     * @return array Tableau des enregistrements trouvés
     */
    public function findAll($entity, $entityKeys = null)
    {
        //romain 8 : 9, 14:  
        $query = $this->request("SELECT * FROM {$this->table}");
        // on stock les donner dans un tableau pour des mesure de securitée
        $objectElem = [];
        while ($data = $query->fetch()) {
            $enty = "App\Entity\\" . $entity;
            $object = new $enty;
            $objectElem[] = $this->hydrate($object, $data, $entityKeys);
        }
        return $objectElem;
    }

    /**
     * findBy Cette Methode Sélectionne enregistrements suivant un tableau de critères
     *
     * @param  string $entity
     * @param  array $criteres
     * @param  array $entityKeys les enregistrements à ne pas hydratter
     * @return array Tableau de tous les enregistrements trouvés
     */
    public function findBy($entity, $criteres, $entityKeys = null)
    {
        $champs = [];
        $values = [];
        // explotion de notre tableau critere
        foreach ($criteres as $champ => $value) {

            $champs[] = "$champ = ?";
            $values[] = $value;
        }
        // on traduit en requette sql
        $liste_champs = implode(' AND ', $champs);
        $query = $this->request("SELECT * FROM {$this->table} WHERE {$liste_champs}", $values);

        // on stock les donner dans un tableau pour des mesure de securitée
        $objectElem = [];
        while ($data = $query->fetch()) {
            $enty = "App\Entity\\" . $entity;
            $object = new $enty;

            $objectElem[] = $this->hydrate($object, $data, $entityKeys);
        }
        return $objectElem;
    }

    public function create()
    {
        $champs = [];
        $values = [];
        $inters = [];
        // explotion de notre tableau critere
        foreach ($this as $champ => $value) {

            if ($value !== null && $champ !== "db" && $champ !== "table") {
                $champs[] = $champ;
                $inters[] =  " ?";
                $values[] = $value;
            }
        }
        // on traduit en requette sql
        $liste_champs = implode(' , ', $champs);
        $liste_inters = implode(' , ', $inters);
        return $this->request('INSERT INTO '.$this->table.' ('. $liste_champs.')VALUES('.$liste_inters.')', $values);
    }


    public function update($id, string $idTable)
    {
        $champs = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach ($this as $champ => $value) {
            if ($value !== null && $champ !== "db" && $champ !== "table") {
                $champs[] = "$champ = ?";
                $valeurs[] = $value;
            }
        }
        $valeurs[] = $id;
        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $champs);
        // On exécute la requête
        return $this->request("UPDATE {$this->table}  SET  {$liste_champs}  WHERE {$idTable} = ?", $valeurs);

    }

    /**
     * Suppression d'un enregistrement
     * @param int $id id de l'enregistrement à supprimer
     * @return bool 
     */
    public function delete(int $id, string $idTable){
        return $this->request("DELETE FROM {$this->table} WHERE {$idTable} = ?", [$id]);
    }

    /**
     * hydrate
     *
     * @param  entity $entity
     * @param  array $donnees l'objet recu grace a la base de donnée
     * @param  array $dontNeedToHydrate les enregistrements à ne pas hydratter
     * @return array
     */
    public function hydrate($entity, $donnees, $dontNeedToHydrate = null)
    {

        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à la clé (key)
            // titre -> setTitre
            if ($dontNeedToHydrate !== null) {

                if (!in_array($key, $dontNeedToHydrate)) {
                    $setter = 'set' . ucfirst($key);
                    // On vérifie si le setter existe
                    if (method_exists($entity, $setter)) {
                        // On appelle le setter
                        $entity->$setter($value);
                    }
                }
            } else {
                $setter = 'set' . ucfirst($key);
                // On vérifie si le setter existe
                if (method_exists($entity, $setter)) {
                    // On appelle le setter
                    $entity->$setter($value);
                }
            }
        }
        return $entity;
    }

    /**
     * Méthode qui exécutera les requêtes
     *
     * @param string $sql Requête SQL à exécuter
     * @param array $attributs Attributs à ajouter à la requête 
     * @return PDOstatement|false
     */
    public function request(string $sql, array $attributs = null)
    {
        $this->db = DataLayer::getIsntance();

        if ($this->db !== null) {
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
        } else {
            $query =  $this->db->query($sql);
        }
        return $query;
    }
}
