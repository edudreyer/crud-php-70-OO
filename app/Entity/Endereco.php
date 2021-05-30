<?php
namespace App\Entity;
use \App\Db\Database;
use \PDO;
class Endereco {

	/** 
	* Identificador único do Endereco
	*	@var integer
	*/
	public $codigo_end;


	/** 
	* codigo do usuario
	*	@var integer
	*/
	public $codigo_usu_end;


	/** 
	*tipo de Endereco
	*	@var string
	*/
	public $tipo_end;


	/** 
	* CEP do Endereco
	*	@var string
	*/
	public $cep_end;

	/** 
	* logradouro  do Endereco
	*	@var string
	*/
	public $logradouro_end;


	/** 
	* numero do Endereco
	*	@var string
	*/
	public $numero_end;


	/** 
	* complemento do endereco
	*	@var string
	*/
	public $complemento_end;


	/** 
	* bairro
	*	@var string
	*/
	public $bairro_end;


	/** 
	* cidade de endereco
	*	@var string
	*/
	public $cidade_end;


	/** 
	* unidade federetiva 
	*	@var string
	*/
	public $uf_end;



	/** 
	* Método responsável pelo cadastro de novo Endereco.
	*	@return boolean
	*/
	public function cadastrar(){
		
		//INSERIR USUARIO NO BANCO
		$obDatabase = new Database('enderecos');
		$this->id = $obDatabase->insert([
			'codigo_usu_end' => $this->codigo_usu_end,
			'tipo_end' => $this->tipo_end,
			'cep_end' => $this->cep_end,
			'logradouro_end' => $this->logradouro_end,
			'numero_end' => $this->numero_end,
			'complemento_end' => $this->complemento_end,
			'bairro_end' => $this->bairro_end,
			'cidade_end' => $this->cidade_end,
			'uf_end' => $this->uf_end,
		]);

        //RETORNAR SUCESSO.
		return true;
	}



	/**
   * Método responsável por atualizar usuario
   * @return boolean
   */
	  public function atualizar(){
	    return (new Database('enderecos'))->update('codigo_end  = '.$this->codigo_end,[
                                                    'codigo_usu_end' => $this->codigo_usu_end,
													'tipo_end' => $this->tipo_end,
													'cep_end' => $this->cep_end,
													'logradouro_end' => $this->logradouro_end,
													'numero_end' => $this->numero_end,
													'complemento_end' => $this->complemento_end,
													'bairro_end' => $this->bairro_end,
													'cidade_end' => $this->cidade_end,
													'uf_end' => $this->uf_end,
                                                      ]);
	  }



	 /**
	   * Método responsável por excluir a endereco do banco
	   * @return boolean
	   */
	  public function excluir(){
	    return (new Database('enderecos'))->delete('codigo_end = '.$this->codigo_end);
	  }


	/**
   * Método responsável por obter os endereco do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
	  public static function getEnderecos($where = null, $order = null, $limit = null){
	    return (new Database('enderecos'))->select($where,$order,$limit)
	    		->fetchAll(PDO::FETCH_CLASS, self::class);

	  }


    /**
   * Método responsável por buscar endereco por codigo
   * @param  integer $id
   * @return usuario
   */
	  public static function getEndereco($codigo_end){
	    return (new Database('enderecos'))->select('codigo_end  = '.$codigo_end)
	                                  ->fetchObject(self::class);
	  }



	   /**
   * Método responsável por buscar endereco por usuario
   * @param  integer $id
   * @return usuario
   */
	  public static function getEnderecoUsuario($codigo_usu_end){
	    return (new Database('enderecos'))->select('codigo_usu_end  = '.$codigo_usu_end)
	                                  ->fetchObject(self::class);
	  }



}
?>