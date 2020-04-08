<?php  

namespace renato\digital_cep;

class Search
{	
	private $url = "https://viacep.com.br/ws/";


	public function get_adress(string $zip_code): array
	{
		$zip_code = preg_replace('/[^0-9]/im', '', $zip_code);

		$get = file_get_contents($this->url.$zip_code."/json");

		return (array)json_decode($get);
	}
}