<?
namespace Infuse\Rest\Controller;
use \Bitrix\Main\Error;
use \Bitrix\Main\UserTable;

class User extends \Bitrix\Main\Engine\Controller
{
	
	public function configureActions() {
		return [
			//Название вашего Action
			'getUserNameVowels' => [
				//Включение фильтра
				'prefilters' => [],
			],

		];
	}
	
	public function getUserNameVowelsAction()
	{
		$request = $this->getRequest();
		
		// Получим информацию о пользователе по его ID
		$user = UserTable::getList([
			'select' => ['ID', 'NAME', 'LAST_NAME', 'SECOND_NAME'],
			'filter' => ['=ID' => $request['id']],
		])->fetch();
		
		if (!$user) {
			return false; // Пользователь не найден
		}
		
		// Объединим имя, фамилию и отчество пользователя
		$fullName = $user['NAME'] . $user['LAST_NAME'] . $user['SECOND_NAME'];
		
		// Извлечем гласные буквы и преобразуем их в нижний регистр без пробелов
		$vowels = preg_replace("/[^aeiouаеёиоуыэюяAEIOUYАЕЁИОУЫЭЮЯ]/", "", mb_strtolower($fullName));
		
		return $vowels;
	}
}