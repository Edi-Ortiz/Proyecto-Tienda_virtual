<?php

    class Mysql extends Conexion
    {
        private $conexion;
        private $strquery;
        private $arrvalue;

        function __construct()
		{
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}

        //insertar un registro
        public function insert(string $query, array $arrValues)
        {
            $this->strquery =$query;
            $this->arrVAlues = $arrValues;            
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrVAlues);
            if($resInsert)
            {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }      
            return $lastInsert;

        }

        //busca un registro
        public function select(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //devulve todos los registro
        public function select_all(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        //actualiza registro
        public function update(string $query,array $arrValues)
        {
            $this->strquery = $query;
            $this->arrVAlues = $arrValues;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrVAlues);
            return $resExecute;
        }

        //eliminar un registro
        public function delete(string $query)
        {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $del = $result->execute();
            return $del;

        }

    }

    

?>