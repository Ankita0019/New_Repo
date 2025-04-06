<?php
	class dataclass
	{
		public $conn="";
		public $query="";
		function __construct()
		{
			$this->conn=mysqli_connect("localhost","root","","event");
		}
		function gettable($query)
		{
			$tb=mysqli_query($this->conn,$query);
			return $tb;
		}
		function getrow($query)
		{
			$tb=mysqli_query($this->conn,$query);
			$rw=mysqli_fetch_array($tb);
			return $rw;
		}
		public function saveRecord($query)
		{
			$result=mysqli_query($this->conn,$query);
			return $result;
		}
		public function primary($query)
		{
			$tb=mysqli_query($this->conn,$query);
			$rw=mysqli_fetch_array($tb);
			if($rw)
			{
				$pk=$rw[0];
				$pk++;
			}
			else
			{
				$pk=1;
			}
			return $pk;
		}
		
		public function getData($query)
		{
			$data="";
			$tb=mysqli_query($this->conn,$query);
			$rw=mysqli_fetch_array($tb);
			if($rw)
			{
				$data=$rw[0];
			}
			else
			{
				$data="";
			}
			return $data;
		}
	}
?>