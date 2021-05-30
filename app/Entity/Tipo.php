<?php
namespace App\Entity;
use \App\Db\Database;
use \PDO;
class Tipo {

	/** 
	* Código do tipo
	*	@var integer
	*/
	public $codigo_ten;

	/** 
	* Descrição do tipo
	*	@var integer
	*/
	public $tipo_ten;

	
	/** 
	* Método responsável pelo cadastro tipo de endereço.
	*	@return boolean
	*/
	public function cadastrar(){
		//INSERIR USUARIO NO BANCO
		$obDatabase = new Database('enderecos_tipo');
		$this->id = $obDatabase->insert([
			'codigo_ten' => $this->codigo_ten,
			'tipo_ten' => $this->tipo_ten,
		]);
        //RETORNAR SUCESSO.
		return true;
	}

   
   /**
   * Método responsável por atualizar tipo de endereço
   * @return boolean
   */
	  public function atualizar(){
	    return (new Database('enderecos_tipo'))->update('codigo_ten  = '.$this->codigo_ten,[
	                                                     		'tipo_ten' => $this->tipo_ten,
	                                                            ]);
	  }


	 /**
	   * Método responsável por excluir de  tipo de endereço
	   * @return boolean
	   */
	  public function excluir(){
	    return (new Database('enderecos_tipo'))->delete('codigo_ten = '.$this->codigo_ten);
	  }


	/**
   * Método responsável por obter os  tipos de endereço do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
	  public static function getTipos($where = null, $order = null, $limit = null){
	    return (new Database('enderecos_tipo'))->select($where,$order,$limit)
	    		->fetchAll(PDO::FETCH_CLASS, self::class);

	  }


	  /**
   * Método responsável por buscar  tipo de endereço por codigo
   * @param  integer $id
   * @return usuario
   */
	  public static function getTipo($codigo_ten){
	    return (new Database('enderecos_tipo'))->select('codigo_ten  = '.$codigo_ten)
	                                  ->fetchObject(self::class);
	  }


}
?>