<?php
class PDOUtil {
	private static $conexao = null;
	public static function getStance() {
		try {
			if (self::$conexao == null) {
				self::$conexao = new PDO ( 'mysql:host=localhost;dbname=inbook_bdd', 'root', '16019377' );
			}
		} catch ( PDOException $excecao ) {
			if ($excecao->getCode () == "2002") {
				echo 'Oi infelizmente seu Host nao foi encontrado, verifique isso com o web-master.';
			}
			if ($excecao->getCode () == "1049") {
				echo 'Oi infelizmente seu banco nao foi encontrado, verifique isso com o web-master.';
			}
			if ($excecao->getCode () == "1044") {
				echo 'Oi infelizmente seu usuario nao foi encontrado, verifique isso com o web-master.';
			}
			if ($excecao->getCode () == "1045") {
				echo 'Oi infelizmente sua senha nao foi encontrada, verifique isso com o web-master.';
			}
		}
		return self::$conexao;
	}
}
