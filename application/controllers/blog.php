<?php
class Blog extends CI_Controller {

	public function index()
	{
		 echo 'Hello World!';
	}
	public function test()
	{
		$this->load->view('blogview');
		//echo 'welcom!'; // echo による標準出力
		//$abc = "test"; // abcという変数に値を格納しているだけ　（内部処理）
		//$def = "test2"; 
		//echo $abc . $def; // abcという変数に格納された値を標準出力
	}

	public function functest()
	{
		$this->testEcho('BBBBBBBBBBBBBB');
	}

	function testEcho($input) {
		echo $input;
	}

	public function functest2()
	{
		$x = $this->calcAdd(5 , 10);
		echo $x;
	}

	function calcAdd($x, $y) {
		return $x + $y;
	}


	public function functest3()
	{
		// $x = $this->calcAdd2(5 , 10);
		// echo $x;
		$a = 1;
		$b = 1;
		$a = $this->input->post('example1');
		$b = $this->input->post('example2');
		$x = $this->calcAdd2($a , $b);
		echo $a;
		echo $b;
		echo "<br>";
		echo $a . '*' . $b . '=' ;
		echo $x;
	}

	function calcAdd2($x, $y) {
		return $x * $y;
	}
	public function test_c()
	{
		$this->testEcho('ぶらんちてすと');
	}
}
?>
