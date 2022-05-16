<?php 


namespace App\Helpers;

/**
* Classe HELPER
*
* Classe é responsável por fornecer funções de formatação de texto
*/
abstract class FormatarDatas {
	
	
	/**
	 * Função responsável por formatar uma data no formato timestamp.
	 * Função recebe como entrada uma data no formato timestamp.
	 * 
	 * @param  timeStamp $timeStamp - Valor em TimeStamp.
	 * @return array
	 */
	public static function formatDateTimeStamp($timeStamp) {
		
		try {

			$dataHora = explode(' ', $timeStamp);
			$retorno['hora'] = $dataHora[1];
			
			$data = explode('-', $dataHora[0]);			
			$data = $data[2] . '/' . $data[1] . '/' . $data[0];
			
			$retorno['data'] = $data;

			return $retorno;

		} catch (\Exception $e) {

			return false;	

		}
		
    }
    
	
	/**
	 * Função responsável por formatar uma data no formato date.
	 * Função recebe como entrada uma data no formato date
	 * 
	 * @param  date $timeStamp - Valor em DATE.
	 * @return array
	 */
	public static function formatDate($date) {

		try {
			$data = explode('-', $date);
			$retorno = $data[2] . '/' . $data[1] . '/' . $data[0];
			return $retorno;
		} catch (\Exception $e) {
			return false;	
		}
		
	}

	public static function difDatas ( $dtInicio , $dtFim ) {
		$data_inicio = new \DateTime( $dtInicio );
		$data_fim = new \DateTime( $dtFim );

		// Resgata diferença entre as datas
		$dateInterval = $data_inicio->diff( $data_fim );
		return $dateInterval->days;
	}

	


}