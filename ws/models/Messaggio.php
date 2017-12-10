<?php

	class Messaggio{
		private $id_messaggio;
		private $id_chat;
		private $id_utente;
		private $testo;
		private $cancellato;

		function __construct($row) {
			if(isset($row)){
				$this->id_messaggio = $row['id_messaggio'];
				$this->id_chat = $row['id_chat'];
				$this->id_utente = $row['id_utente'];
				$this->testo = $row['testo'];
				$this->cancellato = $row['cancellato'];
			}       
		}

		function getIdMessaggio(){
			return $this->id_messaggio;
		}

		function getTesto(){
			return $this->testo;
		}

		function getIdUtente(){
			return $this->id_utente;
		}
	}
	
?>