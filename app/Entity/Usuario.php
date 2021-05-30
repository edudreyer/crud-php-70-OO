<?php
namespace App\Entity;
use \App\Db\Database;
use \PDO;
class Usuario {

	/** 
	* Identificador único do usuário
	*	@var integer
	*/
	public $codigo_usu;

	/** 
	* nome do usuário
	*	@var string
	*/
	public $nome_usu;

	/** 
	* email do usuário
	*	@var string
	*/
	public $email_usu;


	/** 
	* telefone do usuário
	*	@var string
	*/
	public $telefone_usu;

	/** 
	* cpf do usuário
	*	@var string
	*/
	public $cpf_usu;


	/** 
	* data de nascimento do usuário
	*	@var string
	*/
	public $dt_nasc_usu;


	/** 
	* data de cadastro do usuário
	*	@var string
	*/
	public $dt_cadastro_usu;


	/** 
	* data de alteracao do usuário
	*	@var string
	*/
	public $dt_alteracao_usu ;


	/** 
	* Método responsável pelo cadastro de novo usuário.
	*	@return boolean
	*/
	public function cadastrar(){
		
		//INSERIR USUARIO NO BANCO
		$obDatabase = new Database('usuarios');
		$this->id = $obDatabase->insert([
			'nome_usu' => $this->nome_usu,
			'email_usu' => $this->email_usu,
			'telefone_usu' => $this->telefone_usu,
			'cpf_usu' => $this->cpf_usu,
			'dt_nasc_usu' => $this->dt_nasc_usu,
			'dt_cadastro_usu' => $this->dt_cadastro_usu,
			'dt_alteracao_usu' => $this->dt_alteracao_usu,
		]);

        //RETORNAR SUCESSO.
		return true;
	}



	/**
   * Método responsável por atualizar usuário
   * @return boolean
   */
	  public function atualizar(){
	    return (new Database('usuarios'))->update('codigo_usu = '.$this->codigo_usu,[
	                                                                'nome_usu' => $this->nome_usu,
																	'email_usu' => $this->email_usu,
																	'telefone_usu' => $this->telefone_usu,
																	'cpf_usu' => $this->cpf_usu,
																	'dt_nasc_usu' => $this->dt_nasc_usu,
																	'dt_cadastro_usu' => $this->dt_cadastro_usu,
																	'dt_alteracao_usu' => $this->dt_alteracao_usu,
	                                                              ]);
	  }






	 /**
	   * Método responsável por excluir usuário
	   * @return boolean
	   */
	  public function excluir(){
	    return (new Database('usuarios'))->delete('codigo_usu = '.$this->codigo_usu);
	  }


	/**
   * Método responsável por obter os usuario do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
	  public static function getUsuarios($where = null, $order = null, $limit = null){
	    return (new Database('usuarios'))->select($where,$order,$limit)
	    		->fetchAll(PDO::FETCH_CLASS, self::class);

	  }


	  /**
   * Método responsável por buscar usuario por codigo
   * @param  integer $id
   * @return usuario
   */
	  public static function getUsuario($codigo_usu){
	    return (new Database('usuarios'))->select('codigo_usu  = '.$codigo_usu)
	                                  ->fetchObject(self::class);
	  }


}
?>