<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.3.2.295
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка SOLCLEAN - Тестовый период',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'thank-you.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'order@solclean.ru',
		'to' => 'limanovsky@mail.ru,horeca@solclean.ru,webforward@list.ru'
	),
	'fields' => array(
		'custom_U5080' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Введите Ваше имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Введите Ваше имя\' не может быть пустым.'
			)
		),
		'custom_U5088' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Код',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Код\' не может быть пустым.'
			)
		),
		'custom_U5073' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Префикс +7',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5084' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Номер телефона',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Номер телефона\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
