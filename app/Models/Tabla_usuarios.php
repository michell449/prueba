<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class Tabla_usuarios extends Model {
        protected $table = 'usuarios';
        protected $primaryKey = 'id_usuario';
        protected $useAutoIncrement = true;
        protected $returnType = 'object';
        protected $allowedFields = [
                                    'id_usuario', 'estatus_usuario', 'nombre_usuario', 'ap_usuario',
                                    'am_usuario', 'sexo_usuario', 'email_usuario', 'password_usuario',
                                    'imagen_usuario', 'id_rol'
                                    ];

        public function createUsuario($data = array()) {
            if($data != null){
                //insert() true|false : $id
                $id = $this
                        ->table($this->table)
                        ->insert($data);
                return ($id) ? $id : false;
            }//end 
            return false;
        }//end createUsuario

        //['estatus' => -1, 'ap' => 'guevara']
        public function getUsuario($constraint = array()){
            //SELECT id_usuario, ap_usuario, nombre_usuario 
            //FROM usuarios
            //WHERE estatus = 1 and ap = '';
            return $this
                ->table($this->table)
                ->select('id_usuario, ap_usuario, nombre_usuario')
                ->where($constraint)
                ->first();
        }//end getUsuario

        public function getUsuarios(){
            //SELECT id_usuario, ap_usuario, nombre_usuario 
            //FROM usuarios;
            return $this
                ->table($this->table)
                ->select('id_usuario, ap_usuario, nombre_usuario')
                ->findAll();
        }//end getUsuario
        /**
         * UPDATE nameT SET field = value WHERE 
         */
        public function updateUsuario($id = 0, $data = array()){
            if($data != null){
                return $this
                        ->table($this->table)
                        ->set($data)
                        ->where([$this->primaryKey => $id]);
            }//end 
            return false;
        }//end 

        /**
         * DELETE FROM nameT WHERE id_suuario = ;
         */
        public function deleteUser($id = 0){
            if($this->table($this->table)->find($id) != null){
                return $this
                        ->table($this->table)
                        ->delete([$this->primaryKey => $id]); 
            }//end
            return -1;
        }//end deleteUser
        public function validar_usuario($email=null, $pass=null){
            return $this
                    ->table($this->table)
                    ->select('id_usuario')
                    ->join('roles', 'roles.id_rol = usuarios.id_rol')
                    ->where('email_usuario',$email)
                    ->where('password_usuario', $pass)
                    ->first();
        }
    }//end Tabla_usuarios

?>