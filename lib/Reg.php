<?php
   class Reg{
     private $db;

     public function __construct(){
        $this->db = new Database;
     }

     //Get All Unemployed
     public function getAllRegs(){
       $this->db->query("SELECT regs.*, categories.name AS cname
                  FROM regs
                  INNER JOIN categories
                  ON regs.category_id = categories.id
                  ORDER BY post_date DESC
                  ");
                  //Assign Result Set
                  $results = $this->db->resultSet();

                  return $results;
     }

     //Get Categories
      public function getCategories(){
        $this->db->query("SELECT * FROM categories");
                   //Assign Result Set
                   $results = $this->db->resultSet();

                   return $results;
}

      //Get Jobs by Category
      public function getByCategory($category){
        $this->db->query("SELECT regs.*, categories.name AS cname
                   FROM regs
                   INNER JOIN categories
                   ON regs.category_id = categories.id
                   WHERE regs.category_id = $category
                   ORDER BY post_date DESC
                   ");
                   //Assign Result Set
                   $results = $this->db->resultSet();

                   return $results;
}

        //Get category
        public function getCategory($category_id){
          $this->db->query("SELECT * FROM categories WHERE id =
            :category_id");
            $this->db->bind(':category_id', $category_id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        //Get Job
        public function getReg($id){
          $this->db->query("SELECT * FROM regs WHERE id = :id");

            $this->db->bind(':id', $id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        // Create Job
        public function create($data){
          //Insert Query
          $this->db->query("INSERT INTO regs (category_id, job_title,
            previous_company, about, location, contact_user, contact_email)

            VALUES (:category_id, :job_title, :previous_company,
              :about, :location, :contact_user, :contact_email)");
              //Bind Data
              $this->db->bind(':category_id', $data['category_id']);
              $this->db->bind(':job_title', $data['job_title']);
              $this->db->bind(':previous_company', $data['previous_company']);
              $this->db->bind(':about', $data['about']);
              $this->db->bind(':location', $data['location']);
              $this->db->bind(':contact_user', $data['contact_user']);
              $this->db->bind(':contact_email', $data['contact_email']);
              //Execute
              if($this->db->execute( )){
                return true;
              } else{
                return false;
              }
        }

        //Delete Registration
        public function delete($id){
          //Insert Query
          $this->db->query("DELETE FROM regs WHERE id = $id");

              //Execute
              if($this->db->execute( )){
                return true;
              } else{
                return false;
          }
        }

        // Update Job
        public function update($id,  $data){
          //Insert Query
          $this->db->query("UPDATE regs
                SET
                category_id = :category_id,
                job_title = :job_title,
                previous_company = :previous_company,
                about = :about,
                location = :location,
                contact_user = :contact_user,
                contact_email = :contact_email
                WHERE id = $id");
              //Bind Data
              $this->db->bind(':category_id', $data['category_id']);
              $this->db->bind(':job_title', $data['job_title']);
              $this->db->bind(':previous_company', $data['previous_company']);
              $this->db->bind(':about', $data['about']);
              $this->db->bind(':location', $data['location']);
              $this->db->bind(':contact_user', $data['contact_user']);
              $this->db->bind(':contact_email', $data['contact_email']);
              //Execute
              if($this->db->execute( )){
                return true;
              } else{
                return false;
          }
        }
}
