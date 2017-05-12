<?php

// pillando a los h4k0rs
if($telegram->text_contains(["fake GPS", "fake", "fakegps", "nox"])){
    if($telegram->user->id != $this->config->item("creator")){
        $this->analytics->event('Telegram', 'Talk cheating');
        $telegram->send
            ->text("*(A)* *" .$telegram->chat->title ."* - " .$telegram->user->first_name ." @" .$telegram->user->username .":\n" .$telegram->text(), TRUE)
            ->chat($this->config->item('creator'))
        ->send();
        // $this->telegram->sendHTML("*OYE!* Si vas a empezar con esas, deberías dejar el juego. En serio, hacer trampas *NO MOLA*.");
        return -1;
    }
}

elseif($telegram->text_contains(["profe", "oak"]) && $telegram->text_has("dónde estás") && $telegram->words() <= 5){
    $telegram->send
        ->notification(FALSE)
        // ->reply_to(TRUE)
        ->text($telegram->emoji("Detrás de ti... :>"))
    ->send();
    return -1;
}

// comprobar estado del bot
elseif($telegram->text_contains(["profe", "oak"]) && $telegram->text_has(["ping", "pong", "me recibe", "estás", "estás ahí"]) && $telegram->words() <= 4){
	if($pokemon->command_limit("ping", $telegram->chat->id, $telegram->message, 5)){ return -1; }

    $this->analytics->event('Telegram', 'Ping');
    $q = $telegram->send->text("Pong! :D")->send();

	sleep(4);
	$r = $this->telegram->send->delete($q);
	if($r !== FALSE){ $this->telegram->send->delete(TRUE); }

    return -1;
}

elseif($telegram->text_command("help")){
	if($pokemon->command_limit("help", $telegram->chat->id, $telegram->message, 5)){ return -1; }

    $telegram->send
        ->notification(FALSE)
        ->text('¡Aquí tienes la <a href="http://telegra.ph/Ayuda-11-30">ayuda</a>!', 'HTML')
        // ->disable_web_page_preview(TRUE)
    ->send();
    return -1;
}

if(
	strpos(strtolower(@$this->telegram->user->first_name), " oak") !== FALSE or
	strpos(strtolower(@$this->telegram->user->last_name), " oak") !== FALSE
){
	if($pokemon->user_flags($this->telegram->user->id, 'impersonate')){ return -1; }
	$str = ":warning: Suplantación de nombre\n"
				.":id: " .$this->telegram->user->id ." - " .$this->telegram->user->username ."\n"
				.":multiuser: " .$this->telegram->chat->id;
	$str = $this->telegram->emoji($str);
	$this->telegram->send
		->chat($this->config->item('creator'))
		->notification(TRUE)
		->text($str)
	->send();
}

?>
