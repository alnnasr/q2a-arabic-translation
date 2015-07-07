<?php
	
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-users.php
	Description: Language phrases for user management


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "إجابتك في ^site_title عُلق عليها بواسطة ^c_handle:\n\n^open^c_content^close\n\nإجابتك كانت:\n\n^open^c_context^close\n\nيمكنك الرد بإضافة تعليقك الخاص:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'a_commented_subject' => '^site_title - إجابتك جائها تعلق جديد',

		'a_followed_body' => "إجابتك في ^site_title جائها سؤال جديد متعلق بها بواسطة ^q_handle:\n\n^open^q_title^close\n\nإجابتك كانت:\n\n^open^a_content^close\n\nانقر بالأسفل لتجيب على السؤال الجديد:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'a_followed_subject' => '^site_title - إجابتك جائها سؤال جديد متعلق بها',

		'a_selected_body' => "تهانينا! إجابتك في ^site_title تم اختيارها كأفضل إجابة بواسطة ^s_handle:\n\n^open^a_content^close\n\nالسؤال كان:\n\n^open^q_title^close\n\nانقر بالأسفل لمشاهدة إجابتك:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'a_selected_subject' => '^site_title - احابتك تم اختيارها!',

		'c_commented_body' => "تعليق جديد بواسطة ^c_handle تم إضافته بعد تعليقك على ^site_title:\n\n^open^c_content^close\n\nالمناقشة كالتالي:\n\n^open^c_context^close\n\nيمكنك الرد بإضافة تعليق آخر:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'c_commented_subject' => '^site_title تعليقك تم إضافته إلى',

		'confirm_body' => "من فضلك اضغط بالأسفل لتأكيد بريدك الإلكتروني ل^site_title.\n\n^url\n\n،شكرًا لك\n^site_title",
		'confirm_subject' => '^site_title - تأكيد البريد الإلكتروني',

		'feedback_body' => "التعليقات:\n^message\n\nالاسم:\n^name\n\nالبريد الإلكتروني:\n^email\n\nالصفحة السابقة:\n^previous\n\nالمستخدم:\n^url\n\nعنوان IP:\n^ip\n\nالمتصفح:\n^browser",
		'feedback_subject' => '^ رسالة',

		'flagged_body' => "تم الإبلاغ عن مشاركة ^p_handle على ^flags:\n\n^open^p_context^close\n\nانقر التالي لمشاهدة المشاركة:\n\n^url\n\n\nانقر التالي لمراجعة كل المشاركات المعلمة:\n\n^a_url\n\n\nشكراً،\n\n^site_title",
		'flagged_subject' => '^site_title لديه مشاركة معلَمة',

		'moderate_body' => "تنتظر مشاركة ^p_handle موافقتك:\n\n^open^p_context^close\n\nانقر التالي للموافقة أو رفض المشاركة:\n\n^url\n\n\nانقر التالي لمراجعة المشاركات قيد الانتظار:\n\n^a_url\n\n\nشكرا،\n\n^site_title",
		'moderate_subject' => '^site_title إدارة',

		'new_password_body' => "كلمة مرورك الجديدة ل^site_title بالأسفل.\n\nكلمة المرور: ^password\n\nمن المفضل تغيير كلمة المرور بعد تسجيل الدخول فورًا.\n\nشكرًا لك،\n^site_title\n^url",
		'new_password_subject' => '^site_title - كلمة المرور الجديدة',

		'private_message_body' => "لقد وصلتك رسالة خاصة من ^f_handle على ^site_title:\n\n^open^message^close\n\n^moreشكرا,\n\n^site_title\n\n\nلإيقاف الرسائل الخاصة، طالع صفحة حسابك:\n^a_url",
		'private_message_info' => "معلومات أكثر عن ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "انقر التالي للرد على ^f_handle برسالة خاصة:\n\n^url\n\n",
		'private_message_subject' => 'رسالة من ^f_handle on ^site_title',

		'q_answered_body' => "سؤالك في ^site_title تم الإجابة عليه بواسطة ^a_handle:\n\n^open^a_content^close\n\nسؤالك كان:\n\n^open^q_title^close\n\nإذا اعجبتك هذه الإجابة، يمكنك اختيارها لتكون الأفضل:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'q_answered_subject' => '^site_title - تم الإجابة على سؤالك',

		'q_commented_body' => "سؤالك في ^site_title تم التعليق عليه بواسطة ^c_handle:\n\n^open^c_content^close\n\nسؤالك كان:\n\n^open^c_context^close\n\nيمكنك الرد بإضافة تعليقك الخاص:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'q_commented_subject' => '^site_title - تم التعليق على سؤالك',

		'q_posted_body' => "سؤال جديد تم طرحه بواسطة ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nانقر بالأسفل لتشاهد السؤال:\n\n^url\n\nشكرًا لك،\n\n^site_title",
		'q_posted_subject' => '^site_title - سؤال جديد',

		'reset_body' => "من فضلك انقر بالأسفل لتعيد تعيين كلمة مرورك ل^site_title.\n\n^url\n\nعوضًا عن ذلك، يمكنك إدخال الكود بالأسفل في الحقل المقدم في الموقع.\n\nCode: ^code\n\nإذا لم تطلب تغيير كلمة المرور الخاصة بك، فقط تجاهل هذه الرسالة.\n\nشكرًا لك،\n^site_title",
		'reset_subject' => '^site_title - إعادة تعيين كلمة المرور المنسية',

		'remoderate_body' => "تتطلب مشاركة معدلة من قبل ^p_handle موافقتك:\n\n^open^p_context^close\n\nالنقر التالي لاعتماد أو إخفاء المشاركة المعدلة:\n\n^url\n\n\nانقر التالي لمراجعة المشاركات قيد الانتظار:\n\n^a_url\n\n\nشكرا،\n\n^site_title",
		'remoderate_subject' => "^site_title إدارة",	
		'to_handle_prefix' => "^،\n\n",
		'u_registered_body' => "قام مستخدم جديد بالتسجيل باسم ^u_handle.\n\nانقر التالي لعرض معلومات المستخدم:\n\n^url\n\nشكرا،\n\n^site_title",
		'u_to_approve_body' => "قام مستخدم جديد بالتسجيل باسم ^u_handle.\n\nانقر التالي لاعتماد الموافقة على المستخدم:\n\n^url\n\nCانقر التالي لمراجعة المستخدمين قيد الانتظار على الموافقة:\n\n^a_url\n\nشكرا،\n\n^site_title",
		'u_registered_subject' => "^site_title سجل لديه مستخدم جديد",
		'u_approved_body' => "يمكنك الاطلاع على معلومات ملف المستخدم الجديد الخاص بك هنا:\n\n^url\n\nشكرا،\n\n^site_title",
		'u_approved_subject' => "تم الموافقة على اسم ^site_title المستخدم الخاص بك",
		'wall_post_subject' => "شارك على ملصقك ^site_title",
		'wall_post_body' => "^f_handle شارك على ملصقك ^site_title:\n\n^open^post^close\n\nيمكنك التفاعل مع هذه المشاركة هنا:\n\n^url\n\nشكرا،\n\n^site_title",
		
		'welcome_body' => "شكرًا لتسجيلك في^site_title.\n\n^custom^confirmتفاصيل دخولك كالتالي:\n\nاسم المستخدم: ^handle\nالبريد الإلكتروني: ^email\n\nمن فضلك احتفظ بهذه المعلومات لربما تحتاجها مستقبلاً\n\nشكرً لك،\n\n^site_title\n^url",
		'welcome_confirm' => "من فضلك انقر بالأسفل لتؤكد بريدك الإلكتروني.\n\n^url\n\n",
		'welcome_subject' => 'مرحبًا بك في ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
