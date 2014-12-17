<?php
/**create class player**/
class Players
{
	public $blood=100;
	public $mana=40;
	private $name;
	//ini constructor
	function __construct()
	{
		echo "Membuat pemain \n";
	}

	//fungsi untuk set nama
	function set_name()
	{
		echo "Masukan Nama Player : \n";
		fscanf(STDIN, "%s\n", $nama);
		$this->name = $nama;
	}
	//fungsi untuk menampilkan nama
	function get_name()
	{
		return $this->name;
	}

}
/**End class player**/

Class Battle_game
{
	function __construct()
	{
		echo "load game success \n";
	}

	function menu_game()
	{
		echo "Welcome to Battle Arena\n";
		echo "-----------------------\n";
		echo "Description\n";
		echo "1. Ketik new untuk membuat karakter\n";
		echo "2. Ketik start untuk memulai pertarungan\n";
		echo "max player 2 \n";
		fscanf(STDIN, "%s\n", $pilihan);
		return $pilihan;
		echo "cls scr";
	}

	function pilih($pilihan,$i)
	{
		if ($pilihan =="new"){
			$j=1;
			return $j;
		}
		else if($pilihan =="start")
		{
			if($i==2)
			{
				$j=0;
			}else
			{
				return $status="masih kurang pemain";
			}

		}
	}

	function serang($player_1,$player_2)
	{
		$player_1->mana-=20;
		$player_2->blood-=20;
	}
}
/** AKHIR DARI CLASS BATTLE**/

//mulai program
	//array untuk player
	$player=[];
	$i=count($player);
	$j=0;
	$game1 = new Battle_game;

	//penambahan karakter 
	while ( $i<= 1) {
		echo $i."\n";
		$pilihan = $game1->menu_game();
		$j=$game1->pilih($pilihan,$i);
		//cek pemain
		if($j!=1)
		{
			echo $j;
		}
		else
		{
			$i+=$j;
			echo $i."\n";
			$player[$i] = new Players;
			$player[$i]->set_name();
		}	
	}
	
	//mulai perang
	echo "Battle Start \n";
	//pengulangan untuk perang
	while ( ($player[1]->mana && $player[2]->mana) >0) 
	{
		//menentukan siapa yang menyerang
		echo "Siapa yang akan menyerang : ";
		fscanf(STDIN, "%s\n", $pemain1);
		echo "Siapa yang diserang : ";
		fscanf(STDIN, "%s\n", $pemain2);

		if(($pemain1==$player[1]->get_name() && $pemain2==$player[2]->get_name()))
		{
			$game1->serang($player[1],$player[2]);
		}
		else if(($pemain1==$player[2]->get_name() && $pemain2==$player[1]->get_name()))
		{
			$game1->serang($player[2],$player[1]);
		}
		
		//status pemain 1
		echo $player[1]->get_name()." : ";
		echo "manna : ".$player[1]->mana;
		echo " blood : ".$player[1]->blood."\n";
		//status pemain 2
		echo $player[2]->get_name()." : ";
		echo "manna : ".$player[2]->mana;
		echo " blood : ".$player[2]->blood."\n";
		
	}
	echo "GAME OVER \n";
	echo "Pembuat : Juliano \n";
	// akhir dari pengulangan perang
	
/**END OF PROGRAM**/
?>