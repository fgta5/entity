<?php declare(strict_types=1);
namespace Fgta5\Entity\User;

use Fgta5\Framework\ModulePage;

class UserPage extends ModulePage {

	function __construct(array $param) {
		$this->setTitle("User");
	}

	public static function GetObject(object $obj) : UserPage {
		return $obj;
	}

	public function loadPage(string $requestedPage, array $params): void {
		try {

			$pageviewpath = implode(DIRECTORY_SEPARATOR, [__DIR__, 'UserPage.phtml']);
			$this->renderPageFile($pageviewpath, $params);
		} catch (\Exception $ex) {
			throw $ex;
		}

	}

}