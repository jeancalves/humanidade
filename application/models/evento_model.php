<?php

/**
* 
*/
class Evento_model extends Model{
	
	function __construct(argument){
		# code...
	}

	public function get_evento($data = array()){
		/*
		* Listagem de eventos
		* parâmetros: $data (array)
		* ====> indice(nome da coluna)
		*       valor (que deseja buscar) 
		*/

		if(count($data) != 0){
			foreach ($data as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		$query = $this->db->get('evento_social');
		return $query->result();
	}
}

?>