<?php
/**
 * BattlefieldTools.com BFP4F ServerTool
 * Version 0.6.0
 *
 * Copyright (C) 2013 <Danny Li> a.k.a. SharpBunny
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */
 
$lang = array(
	
	// Language information
	'lang_name' => 'Polish / Polski',
	'lang_name_short' => 'PL',
	'lang_charset' => 'utf8',
	'lang_translator' => 'Nommo from Partisans Clan',
	'lang_notes' => 'None', // Add here some additional notes... If you've got some...
	
	'github' => 'View on GitHub',
	
	// Some words
	'word_tool' => 'BattlefieldTools Servertool',
	'word.tool' => 'Narzędzie',
	'word_cp_full' => 'Panel Kontrolny',
	'word_cp' => 'PK',
	'word_vip' => 'VIP',
	'word_welcome' => 'Witaj',
	'word_language' => 'Język',
	'word_about' => 'Informacje',
	'word_error' => 'O NIE!', # Error
	'word_yes' => 'Tak',
	'word_no' => 'Nie',
	'word_ok' => 'OK',
	'word_cancel' => 'Anuluj', // Verb
	'word_delete' => 'Usuń', // Verb
	'word_go' => 'Idź',
	'word_devs' => 'Developerzy',
	'word_translators' => 'Tłumacze',
	'word_suggestions' => 'Propozycje',
	'word_settings' => 'Ustawienia',
	'word_name' => 'Nazwa',
	'word_loading' => 'Wczytuje',
	'word_actions' => 'Akcje',
	'word_qa' => 'Q&A',
	'word_player' => 'Gracz',
	'word_players' => 'Gracze',
	'word_playername' => 'Nick',
	'word_profileid' => 'ProfileID',
	'word_rank' => 'Poziom',
	'word_updated' => 'Wczytano',
	'word_enable' => 'Włącz', // Verb
	'word_disable' => 'Wyłącz', // Verb
	'word_enabled' => 'Włączone',
	'word_disabled' => 'Wyłączone',
	'word_ty' => 'Dziękuje!',
	'word_date' => 'Data',
	'word_until' => 'Do',
	'word_forever' => 'Zawsze',
	
	// Messages
	'msg_serverdown' => 'Narzędnie nie może połączyć się z serwerem, może być wyłączony, lub zostały podane złe dane RCON. SPRAWDŹ TO!',
	'msg_serverup' => 'Serwer działa poprawnie.',
	'msg_norights' => 'Nie wolno Ci tu zaglądać.',
	'msg_settings_saved' => 'Ustawienia zostały zapisane',
	'msg_error' => 'Wystąpiły następujące błędy:',
	'msg_cmd_noaccess' => 'Nie możesz używać tej komendy',
	'msg_cmd_missingvars' => 'Źle wpisana komenda',
	'msg_cmd_failed' => 'Błąd podczas wykonywania komendy',
	'msg_nologin' => 'Nie jesteś zalogowany',
	'msg_sure' => 'Jesteś pewnien, definitywnie, na 100%?',
	'msg_notadded' => 'Ta funkcja jeszce nie jest dostępna',
	'msg_db1' => 'Przejdź do strony konfiguracji, aby włączyć/wyłączyć to narzędzie',
	
	// Buttons
	'btn_back' => 'Wróć',
	'btn_previous' => 'Poprzedni',
	'btn_next' => 'Następny',
	'btn_save' => 'Zapisz',
	'btn_add' => 'Dodaj',
	'btn_close' => 'Zamknij',
	
	// Version checker
	'vcheck' => 'Sprawdź wersje',
	'vcheck_latest' => 'Ostatnia wersja',
	'vcheck_current' => 'Obecna wersja',
	'vcheck_past' => 'Wcześniejsze wersje',
	'vcheck_download' => 'Pobierz',
	'vcheck_notes' => 'Notatki',
	'vcheck_err1' => 'Nie można połączyć się z głównym serwerem, spróbuj później!',
	'vcheck_ok' => 'Ostatnia wersja zainstalowana!',
	'vcheck_old' => 'Twój tool jest nieaktualny, ściągnij najnowszą wersje!',
	
	// Tools general
	'tool_gen_ignorevip' => 'Ignorowanie VIPów',
	'tool_gen_help1' => 'Maximum na team',
	'tool_gen_kick_msg' => 'Powód kicka',
	'tool_gen_help2' => 'Powód kicka, który gracz będzie widzieć',
	
	// Tools names and descriptions
	'tool_server' => 'Zarządzanie serwerem',
	'tool_server_desc' => 'Aktualny status i zarządzanie serwerem',
	'tool_server_editrcon' => 'Zmień dane RCON',
	'tool_server_toggle' => 'Przełącz odświeżanie',
	'tool_server_nextmap' => 'Następna mapa',
	'tool_server_nextmap_msg' => 'Mapa jest zmieniana',
	'tool_server_restartround' => 'Restart rundy',
	'tool_server_restartround_msg' => 'Runda jest restartowana',
	'tool_server_empty' => 'Serwer jest pusty',
	'tool_server_editrcon_msg' => 'Nowe dane RCON zapisane', // Not used anymore...
	'tool_server_warnpl_msg' => 'Gracz dostał ostrzeżenie',
	'tool_server_kickpl_msg' => 'Wykickowano gracza',
	'tool_server_ranked' => 'RANKINGOWY', // NOTE: All uppercase!
	'tool_server_unranked' => 'NIE RANKINGOWY', // NOTE: All uppercase!
	'tool_server_joining' => 'wczystuje się', // NOTE: All lowercase
	'tool_server_curmap' => 'Obecna mapa',
	'tool_server_t1tickets' => 'Tickety Teamu 1',
	'tool_server_t2tickets' => 'Tickety Teamu 2',
	'tool_server_playing' => 'Runda trwa',
	'tool_server_serverip' => 'IP Serwera',
	'tool_server_rconport' => 'Port RCON',
	'tool_server_rconpass' => 'Hasło RCON',
	'tool_server_chat' => 'Chat',
	'tool_server_adminchat' => 'Adminchat',
	'tool_server_team' => 'Drużyna',
	'tool_server_kit' => 'Klasa',
	'tool_server_ping' => 'Ping',
	'tool_server_kills' => 'Zabici',
	'tool_server_deaths' => 'Zgony',
	'tool_server_score' => 'Wynik',
	'tool_server_idle' => 'Śpi',
	'tool_server_plactions' => 'O graczu',
	'tool_server_ltp' => 'Link do profilu',
	'tool_server_kick' => 'Wykickuj',
	'tool_server_warn' => 'Ostrzeż',
	'tool_server_nochat' => 'Brak wiadomości na czacie',
	'tool_server_send_msg' => 'Wyślij wiadomość',
	'tool_server_send_msg_help1' => 'Wiadomośc pokaże się na adminchatcie!',
	'tool_server_msg_sent' => 'Wiadomość została wysłana',
	
	'tool_rcon' => 'Konsola RCON',
	'tool_rcon_desc' => 'Wykonuje komendy RCON',
	'tool_rcon_info1' => 'UWAGA: Nie dla n00bów - możesz zepsuć server',
	'tool_rcon_field1' => 'Komenda',
	
	'tool_igcmds_rights' => 'Prawa IGA',
	'tool_igcmds_add' => 'Dodaj komende',
	'tool_igcmds_edit' => 'Edytuj komende',
	'tool_igcmds_cmd' => 'Komenda',
	'tool_igcmds_func' => 'Funkcja',
	'tool_igcmds_lvl' => 'Poziom praw',
	'tool_igcmds_active' => 'Aktywna',
	'tool_igcmds_response' => 'Odpowiedź',
	'tool_igcmds_deleted' => 'Komenda usunięta',
	'tool_igcmds_err1' => 'Poziom praw musi wynosić między 0 - 100',
	'tool_igcmds_err2' => 'Komenda nie może być pusta',
	'tool_igcmds_err3' => 'Ta komenda już istnieje',
	'tool_igcmds_err4' => 'Ta funkcja nie istnieje',
	'tool_igcmds_err5' => 'Maxymalna ilość znaków odpowiedzi to 75.',
	'tool_igcmds_help1' => 'Poziom praw między 0 - 100',
	'tool_igcmds_help2' => 'Działa tylko przy funkcji cmdMessage',
	'tool_igcmds_help3' => 'Odpowiedź wysyłana tylko do gracza?',
	'tool_igcmds_help4' => 'Komenda aktywna?',
	
	'tool_mrot' => 'Zmień rotacje map',
	'tool_mrot_map' => 'Nazwa map',
	'tool_mrot_gamemode' => 'Tryb Gry',
	'tool_mrot_current' => 'Obecna rotacja',
	'tool_mrot_available' => 'Dostepne mapy',
	'tool_mrot_rpm' => 'Rundy / mapa',
	'tool_mrot_help1' => 'Kliknij na mapę, aby dodać ją!',
	'tool_mrot_help2' => 'Złap i upuść, aby zmienić kolejność map!',
	'tool_mrot_err1' => 'Niepoprawna wartość rotacji',
	'tool_mrot_err2' => 'Musisz dodać przynajmniej jedną mapę',
	'tool_mrot_err3' => 'Coś ty wpisał w ilość rund? Wpisz numer!',
	
	'tool_vipm' => 'Zarządzanie VIPami',
	'tool_vipm_desc' => 'Dodaj / Usuń VIPa',
	'tool_vipm_vipadded' => 'VIP dodany',
	'tool_vipm_vipdeleted' => 'VIP usunięty',
	'tool_vipm_notfound' => 'Nie znaleziono VIPów',
	
	'tool_iteml' => 'Lista przedmiotów',
	'tool_iteml_desc' => 'Wszystkie przedmioty w BFP4F',
	
	'tool_set' => 'Ustawienia',
	'tool_set_desc' => 'Ustawienia panelu kontrolnego',
	'tool_set_deflang' => 'Domyślny język',
	'tool_set_df' => 'Format daty',
	'tool_set_fdf' => 'Pełny format daty',
	'tool_set_notifier' => 'Powiadamiacz',
	'tool_set_notify_email' => 'Wysyłaj powiadomienia na e-mail',
	'tool_set_iga_ad' => 'Mała reklama',
	'tool_set_bml' => 'Bookmarklink',
	'tool_set_iga_ad_opt' => 'Pokazuj co %s% sekund',
	'tool_set_iga_ad_help' => "Pokazuje wiadomość: '%msg%'",
	'tool_set_help1' => 'Więcej informacji o formatach daty znajdziej tutaj <a href="http://nl3.php.net/manual/en/function.date.php" target="_blank">PHP date()</a>',
	'tool_set_help2' => 'Używane do sprawdzenia, które serwery używają BattlefieldTools. Zostaw puste, jeżeli nie chcesz być namierzany',
	'tool_set_err1' => 'Język %lang% nie istnieje!',
	'tool_set_err2' => 'Niepoprawna wartość dla reklamy',
	'tool_set_err3' => 'Niepoprawna wartość dla powiadamiacza',
	'tool_set_err4' => 'Podaj poprawny email',
	'tooL_set_err5' => 'Zły bookmark',
	
	'tool_acc' => 'Konta',
	'tool_acc_desc' => 'Zarządzaj kontami',
	'tool_acc_add' => 'Dodaj konto',
	'tool_acc_edit' => 'Edytuj konto',
	'tool_acc_expl1' => 'Zostaw pustę polę na hasło, gdy nie chcesz go zmieniać',
	'tool_acc_rights' => 'Wybierz, jakie prawa ma mieć użytkownik',
	'tool_acc_fr1' => '<abbr title="In-Game Admin">IGA</abbr>',
	'tool_acc_fr2' => 'Super-admin',
	'tool_acc_fr3' => 'Dostęp RCON',
	'tool_acc_fr4' => 'Czarna lista',
	'tool_acc_fr5' => 'VIP',
	'tool_acc_fr6' => 'Zarządzanie serwerem',
	'tool_acc_fr7' => 'Lista przedmiotów',
	'tool_acc_fr8' => 'Auto-kicker',
	'tool_acc_fr9' => 'Logi',
	'tool_acc_fr10' => 'Biała Lista',
	'tool_acc_help1' => 'Nick musi miec conajmniej 5 znaków, jest to nazwa publiczna',
	'tool_acc_help2' => 'Login musi mieć minimum 5 znaków i być unikalny',
	'tool_acc_help3' => 'Hasło musi mieć minimum 6 znaków',
	'tool_acc_help4' => 'Potwierdź hasło',
	'tool_acc_err1' => 'Twój nick musi mieć minimum 5 znaków',
	'tool_acc_err2' => 'Twój login musi mieć minimum 5 znaków',
	'tool_acc_err3' => 'Hasło musi miec minimum 6 znaków',
	'tool_acc_err4' => 'Nieznane wartość praw użytkownika',
	'tool_acc_err5' => 'Niepoprawny ProfileID',
	'tool_acc_err6' => 'Nie znaleziono kont',
	'tool_acc_err7' => 'Nie możesz sam sobie zabrać praw super-admina',
	
	'tool_logs' => 'Logi',
	'tool_logs_desc' => 'Zobacz logi, może są tam dziwne wpisy?',
	'tool_logs1' => 'Autokicker log',
	'tool_logs1_desc' => 'Wszystkie wykonane kicki',
	'tool_logs2' => 'Log panelu kontrolnego',
	'tool_logs2_desc' => 'Wszystkie wykonane akcje z panelu',
	'tool_logs3' => 'Log IGA',
	'tool_logs3_desc' => 'Wszystkie wykonane komendy',
	'tool_word_desc' => 'Opis',
	
	'tool_wl' => 'Weapon limiter',
	'tool_wl_desc' => 'Wybierz zabronione bronie i kickuj ich posiadaczy',
	'tool_wl_disallowed' => 'Niedozwolone przedmioty',
	'tool_wl_inverse' => '<b>Inwersja:</b> <u>Pozwól</u> używać tylko wyżej wymienionych broni',
	'tool_wl_err1' => 'Nieznany status auto-kicka',
	'tool_wl_err2' => 'Nieznana wartość ignorowania VIPów',
	'tool_wl_err3' => 'Zły BFID: %id%',
	
	'tool_pl' => 'Prebuy limiter',
	'tool_pl_desc' => 'Zabroń prebuy\'a dla wybranych broni',
	'tool_pl_check' => 'Przedmioty do sprawdzenia',
	'tool_pl_help1' => 'Zostaw puste dla kickowania za prebuy <b>WSZYSTKICH</b> broni',
	
	'tool_al' => 'Limiter dodatków',
	'tool_al_desc' => 'Wybierz zabronione dodatki',
	
	'tool_sl' => 'Shotgun limiter',
	'tool_sl_desc' => 'Ustal maxymalna ilość graczy z shotgunami na drużynę',
	'tool_sl_max' => 'Ilość graczy',
	'tool_sl_help1' => 'Maxiumum graczy z shotgunami na drużynę',
	'tool_sl_err1' => 'Nieznany status auto-kicka',
	'tool_sl_err2' => 'Nieznana wartość ignorowania VIPów',
	'tool_sl_err3' => 'Zła wartość maxymalnej ilości graczy z shotgunami na drużynę',
	
	'tool_ll' => 'Level limiter',
	'tool_ll_desc' => 'Ustal minimalny i maxymalny level',
	'tool_ll_min' => 'Minimalny level',
	'tool_ll_max' => 'Maxymalny level',
	'tool_ll_err1' => 'Nieznany status auto-kicka',
	'tool_ll_err2' => 'Nieznana wartość ignorowania VIPów',
	'tool_ll_err3' => 'Minimalny level musi być między: %lvls%',
	'tool_ll_err4' => 'Maxymalny level musi być między: %lvls%',
	
	'tool_cl' => 'Class limiter',
	'tool_cl_desc' => 'Ustal maxymalną ilość graczy z daną klasą na drużynę',
	'tool_cl_assaults' => 'Szturmowcy',
	'tool_cl_medics' => 'Medycy',
	'tool_cl_recons' => 'Snajperzy',
	'tool_cl_engineers' => 'Inżynierowie',
	'tool_cl_err1' => 'Nieznany status auto-kicka',
	'tool_cl_err2' => 'Nieznana wartość ignorowania VIPów',
	'tool_cl_err3' => 'Zła wartość dla klasy: %class%',
	
	'tool_am' => 'Wiadomości ADMINów',
	'tool_am_desc' => 'Wysyłaj wiadomość o stanie administratorów online',
	'tool_am_opt' => 'Wysyłaj co %s% sekund',
	'tool_am_online' => 'Wiadomość, gdy na serwerze jest administrator',
	'tool_am_offline' => 'Wiadomość, gdy na serwerze nie ma administratora',
	'tool_am_help1' => 'Czas do pokazania wiadomości',
	'tool_am_help2' => 'Treść wiadomości, gdy conajmniej jeden z administratorów jest online <br /><code>%admins%</code> - nicki administratorów',
	'tool_am_help3' => 'Treść wiadomości, gdy na serwerze nie ma administratorów',
	'tool_am_err1' => 'Nieznany status wiadomości',
	'tool_am_err2' => 'Nie możesz zostawić tej wiadomości pustej!',
	'tool_am_err3' => 'Nie możesz zostawić tej wiadomości pustej!',
	
	'tool_sm' => 'Wiadomości statystyk',
	'tool_sm_desc' => 'Pokazuje wiadomość w grze o aktualnych statystykach wybrane gracza',
	'tool_sm_opt' => 'Wysyłaj co %s% sekund',
	'tool_sm_msg' => 'Wiadomość',
	'tool_sm_help1' => 'Czas do wysłania wiadomości',
	'tool_sm_help2' =>	'Wiadomość do wysłania, możesz użyć następujących zmiennych:<br />' .
						'<code>%name%</code> - Nick<br />' .
						'<code>%ping%</code> - Ping<br />' .
						'<code>%class%</code> - Klasa<br />' .
						'<code>%rank%</code> - Poziom<br />' .
						'<code>%kills%</code> - Kille<br />' .
						'<code>%deaths%</code> - Zgony<br />' .
						'<code>%score%</code> - Punkty<br />' .
						'<code>%vip%</code> - Status VIP (Yes/No)',
	
	'tool_bl' => 'Czarna lista',
	'tool_bl_desc' => 'Zbanuj gracza, na określony czas bądź permanentnie',
	'tool_bl_reason' => 'Powód',
	'tool_bl_until' => 'Zbanowany do',
	'tool_bl_help1' => '0000-00-00 00:00:00 = Ban permanentny',
	'tool_bl_warn1' => 'Nie można włączyć/wyłączyc czarnej listy',
	'tool_bl_err1' => 'Ten gracz ma już bana permanentnego',
	'tool_bl_err2' => 'Zły ProfileID',
	'tool_bl_err3' => 'Nikt nie został jeszcze zbanowany!',
	'tool_bl_addedby' => 'Zbanowany przez',
	'tool_bl_added' => 'Ban został dodany',
	'tool_bl_deleted' => 'Ban został usunięty',
	
	'tool_wlist' => 'Biała lista',
	'tool_wlist_desc' => 'Dodaj graczy, którzy będą bezpieczni',
	'tool_wlist_added' => 'Gracz został dodany do Białej Listy',
	'tool_wlist_deleted' => 'Gracz został usunięty z Białej Listy',
	'tool_wlist_err1' => 'Ten graczy już został dodany do białej listy',
	'tool_wlist_err2' => 'Zły ProfileID',
	'tool_wlist_err3' => 'Nikogo jeszcze nie dodano do Białej Listy',
	'tool_wlist_addedby' => 'Dodany przez',
	
	'tool_dsl' => 'Double-slot limiter',
	'tool_dsl_desc' => 'Zabrania korzystania z double-slota',
	
	'tool_igcmds' => 'Komendy w grze',
	'tool_igcmds_desc' => 'Używaj komend w grze',
	
	// Installation page
	#'install_welcome' => 'Welcome to the installation wizard, make sure all your details are filled in correctly. Then click on install.',
	#'install_error_config' => 'Please fill in your details in the file config.php before trying to install the tool',
	#'install_error' => 'Installation failed, please install the database manually by using the following SQL',
	#'install_success' => 'Installation was succesful, please delete the file install.php. You can login with the following details',
	
	// ControlPanel no rights page
	'cp_norights' => 'Dostęp zabroniony',
	'cp_norights_msg' => 'Nie masz praw, aby wejśc na tą stronę.',
	
	// ControlPanel menu
	'cp_menu_tools' => 'Opcje',
	'cp_menu_credits' => 'Podzękowania',
	'cp_menu_donate' => 'Dotacje',
	'cp_menu_report_bug' => 'Zgłoś błąd',
	'cp_menu_subm_sug' => 'Wyślij sugestie',
	'cp_menu_qa' => 'Q&A',
	'cp_menu_changelog' => 'Changelog',
	'cp_menu_logout' => 'Wyloguj',
	
	// ControlPanel login page
	'cp_login' => 'Login',
	'cp_username' => 'Nick',
	'cp_password' => 'Hasło',
	'cp_login_remember' => 'Zapamiętaj mnie',
	'cp_error_login' => 'Zły nick i/lub hasło. Spróbuj ponownie',
	'cp_error_login_sessions' => 'Błąd podczas logowania. Jeśli ta wiadomość będzie występowała dalej sprawdź swoje ustawienia PHP.',
	
	// ControlPanel logout page
	'cp_logout' => 'Wyloguj',
	'cp_logout_success' => 'Zostałeś pomyślnie wylogowany. See ya later, bro!',
	
	// ControlPanel dashboard
	'cp_dashboard' => 'Panel zarządania',
	'cp_dashboard_subtitle' => 'Wszystkie opcje w jednym miejscu',
	'cp_dashboard_explination' => 'Kliknij na <i class="icon-remove"></i> aby aktywować auto-kicka, bądź na <i class="icon-ok"></i> aby go deaktywować. Kliknij na nazwę w celu zarządzania.',
	'cp_dashboard_info_1' => 'Gracze',
	'cp_dashboard_info_2' => 'Status serwera',
	
	// ControlPanel my account
	'cp_myaccount' => 'Moje konto',
	'cp_myaccount_subtitle' => 'Zarządzaj swoim własnym kontem',
	'cp_myaccount_expl1' => 'Nick musi miec conajmniej 5 znaków, jest to nazwa publiczna',
	'cp_myaccount_expl2' => 'Zostaw pustę polę na hasło, gdy nie chcesz go zmieniać',
	'cp_myaccount_oldpass' => 'Stare hasło',
	'cp_myaccount_newpass' => 'Nowe hasło',
	'cp_myaccount_expl3' => 'Minimum 6 znaków',
	'cp_myaccount_expl4' => 'Hasła muszą się zgadzać!',
	'cp_myaccount_err1' => 'Twój nick musi mieć minimum 4 znaki',
	'cp_myaccount_err2' => 'Podałeś złe stare hasło',
	'cp_myaccount_err3' => 'Nowe hasło musi mieć minimum 6 znaków',
	'cp_myaccount_err4' => 'Nowe hasła nie zgadzają ze sobą',
	
	// ControlPanel itemlist page
	'cp_itemlist_err1' => 'Nie znaleziono żadnych przedmiotów',
	
	// ControlPanel footer
	'cp_footer_thread' => 'Temat o narzędziu',
	
	/*
	* Q&A THINGS
	*/
	'qa_questions' => 'Pytania',
	'qa_answers' => 'Odpowiedzi',
	'qa_note' => 'NOTE: Więcej Q&A zostanie dodanych w przyszłości, w tym czasie możesz zadawać pytania za pomocą PM, RaidCall lub e-mail.',
	
	
	'qa' => array(
		1 => array(
			'question' => 'Jak znaleźć ProfileID gracza?',
			'anwser' => 'Przykład: <code>http://battlefield.play4free.com/en/profile/2567963101/540307041</code><br /><code>2567963101</code> = ProfileID<br /><code>540307041</code> = SoldierID'
		 ),
	),

);
?>
