<?php

function pokemon_badges($search = NULL){
	$badges = [
		[
			'name' => 'Kanto',
			'name_en' => 'Kanto',
			'type' => 'BADGE_POKEDEX_ENTRIES',
			'desc' => 'Pokémon registrados en la Pokédex',
			'targets' => [5, 50, 100]
		],
		[
			'name' => 'Johto',
			'name_en' => 'Johto',
			'type' => 'BADGE_POKEDEX_JOHTO',
			'desc' => 'Registra x Pokémon originalmente de la región de Johto en la Pokédex.',
			'targets' => [5, 30, 70]
		],
		[
			'name' => 'Pokécolector',
			'name_en' => 'Collector',
			'type' => 'BADGE_CAPTURE_TOTAL',
			'desc' => 'Pokémon capturados',
			'desc_en' => 'Capture Pokemon',
			'targets' => [30, 500, 2000]
		],
		[
			'name' => 'Mochilero',
			'name_en' => 'Backpacker',
			'type' => 'BADGE_POKESTOPS_VISITED',
			'desc' => 'Visitas a Poképaradas',
			'desc_en' => 'Visit PokéStops',
			'targets' => [100, 1000, 2000]
		],
		[
			'name' => 'Corredor',
			'name_en' => 'Jogger',
			'type' => 'BADGE_TRAVEL_KM',
			'desc' => 'Km recorridos',
			'desc_en' => 'Walk km',
			'targets' => [10, 100, 1000]
		],
		[
			'name' => 'Científico',
			'name_en' => 'Scientist',
			'type' => 'BADGE_EVOLVED_TOTAL',
			'desc' => 'Pokémon evolucionados',
			'desc_en' => 'Evolve Pokémon',
			'targets' => [3, 20, 200]
		],
		[
			'name' => 'Luchadora',
			'name_en' => 'Battle Girl',
			'type' => 'BADGE_BATTLE_ATTACK_WON',
			'desc' => 'Combates de Gimnasio ganados',
			'desc_en' => 'Win Gym battles',
			'targets' => [10, 100, 1000]
		],
		[
			'name' => 'Criapokémon',
			'name_en' => 'Breeder',
			'type' => 'BADGE_HATCHED_TOTAL',
			'desc' => 'Huevos eclosionados',
			'desc_en' => 'Hatch Eggs',
			'targets' => [10, 100, 500]
		],
		[
			'name' => 'Pescador',
			'name_en' => 'Fisherman',
			'type' => 'BADGE_BIG_MAGIKARP',
			'desc' => 'Magikarp grandes conseguidos',
			'desc_en' => 'Catch big Magikarp',
			'targets' => [3, 50, 300]
		],
		[
			'name' => 'Brillante',
			'name_en' => 'Shiny',
			'type' => 'BADGE_SHINY',
			'custom' => TRUE,
			'desc' => 'Pokémon Shiny capturados',
			'targets' => [1, 5, 25]
		],
		[
			'name' => 'Entre. Guay',
			'name_en' => 'Ace Trainer',
			'type' => 'BADGE_BATTLE_TRAINING_WON',
			'desc' => 'Número de entrenamientos',
			'name_en' => 'Train times',
			'targets' => [10, 100, 1000]
		],
		[
			'name' => 'Joven',
			'name_en' => 'Youngster',
			'type' => 'BADGE_SMALL_RATTATA',
			'desc' => 'Rattata pequeños conseguidos',
			'desc_en' => 'Catch tiny Rattata',
			'targets' => [3, 50, 300]
		],
		[
			'name' => 'Fan de Pikachu',
			'name_en' => 'Pikachu Fan',
			'type' => 'BADGE_PIKACHU',
			'desc' => 'Pikachu conseguidos',
			'desc_en' => 'Catch Pikachu',
			'targets' => [3, 50, 300]
		],
		[
			'name' => 'Unown',
			'type' => 'BADGE_UNOWN',
			'desc' => 'Unown atrapados',
			'targets' => [3, 10, 26]
		],
		[
			'name' => 'Escolar',
			'name_en' => 'Schoolkid',
			'type' => 'BADGE_TYPE_NORMAL',
			'desc' => 'Pokémon de tipo Normal capturados.',
			'desc_en' => 'Catch Normal-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Ornitólogo',
			'name_en' => 'Bird Keeper',
			'type' => 'BADGE_TYPE_FLY',
			'desc' => 'Pokémon de tipo Volador capturados.',
			'desc_en' => 'Catch Flying-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Chica Mala',
			'name_en' => 'Punk Girl',
			'type' => 'BADGE_TYPE_POISON',
			'desc' => 'Pokémon de tipo Veneno capturados.',
			'desc_en' => 'Catch Poison-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Cazabichos',
			'name_en' => 'Bug Catcher',
			'type' => 'BADGE_TYPE_BUG',
			'desc' => 'Pokémon de tipo Bicho capturados.',
			'desc_en' => 'Catch Bug-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Nadador',
			'name_en' => 'Swimmer',
			'type' => 'BADGE_TYPE_WATER',
			'desc' => 'Pokémon de tipo Agua capturados.',
			'desc_en' => 'Catch Water-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Jardinero',
			'name_en' => 'Gardener',
			'type' => 'BADGE_TYPE_GRASS',
			'desc' => 'Pokémon de tipo Planta capturados.',
			'desc_en' => 'Catch Grass-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Ruinamaníaco',
			'name_en' => 'Ruin Maniac',
			'type' => 'BADGE_TYPE_GROUND',
			'desc' => 'Pokémon de tipo Tierra capturados.',
			'desc_en' => 'Catch Ground-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Médium',
			'name_en' => 'Psychic',
			'type' => 'BADGE_TYPE_PSYCHIC',
			'desc' => 'Pokémon de tipo Psíquico capturados.',
			'desc_en' => 'Catch Psychic-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Niña Soñadora',
			'name_en' => 'Fairy Tale Girl',
			'type' => 'BADGE_TYPE_FAIRY',
			'desc' => 'Pokémon de tipo Hada capturados.',
			'desc_en' => 'Catch Fairy-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Karateka',
			'name_en' => 'Black Belt',
			'type' => 'BADGE_TYPE_FIGHTING',
			'desc' => 'Pokémon de tipo Lucha capturados.',
			'desc_en' => 'Catch Fighting-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Montañero',
			'name_en' => 'Hiker',
			'type' => 'BADGE_TYPE_ROCK',
			'desc' => 'Pokémon de tipo Roca capturados.',
			'desc_en' => 'Catch Rock-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Bruja',
			'name_en' => 'Hex Maniac',
			'type' => 'BADGE_TYPE_GHOST',
			'desc' => 'Pokémon de tipo Fantasma capturados.',
			'desc_en' => 'Catch Ghost-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Prendefuegos',
			'name_en' => 'Kindler',
			'type' => 'BADGE_TYPE_FIRE',
			'desc' => 'Pokémon de tipo Fuego capturados.',
			'desc_en' => 'Catch Fire-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Rockero',
			'name_en' => 'Rocker',
			'type' => 'BADGE_TYPE_ELECTRIC',
			'desc' => 'Pokémon de tipo Eléctrico capturados.',
			'desc_en' => 'Catch Electric-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Ferroviario',
			'name_en' => 'Depot Agent',
			'type' => 'BADGE_TYPE_STEEL',
			'desc' => 'Pokémon de tipo Acero capturados.',
			'desc_en' => 'Catch Steel-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Esquiador',
			'name_en' => 'Skier',
			'type' => 'BADGE_TYPE_ICE',
			'desc' => 'Pokémon de tipo Hielo capturados.',
			'desc_en' => 'Catch Ice-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Domadragón',
			'name_en' => 'Dragon Tamer',
			'type' => 'BADGE_TYPE_DRAGON',
			'desc' => 'Pokémon de tipo Dragón capturados.',
			'desc_en' => 'Catch Dragon-type Pokémon.',
			'targets' => [10, 50, 200]
		],
		[
			'name' => 'Macarra',
			'name_en' => 'Delinquent',
			'type' => 'BADGE_TYPE_DARK',
			'desc' => 'Pokémon de tipo Siniestro capturados.',
			'desc_en' => 'Catch Dark-type Pokémon.',
			'targets' => [10, 50, 200]
		],
	];
	if(empty($search)){ return $badges; }
	foreach($badges as $badge){
		if(
			strtolower($search) == strtolower($badge['name']) or
			strtolower($search) == strtolower(@$badge['name_en']) or
			strtoupper($search) == $badge['type'] or
			strtoupper("BADGE_TYPE_" .$search) == $badge['type'] or
			strtoupper("BADGE_" .$search) == $badge['type']
		){ return $badge; }
	}
	return NULL;
}

function badge_points($badge, $user, $update = FALSE){
	if(substr($badge, 6) != "BADGE_"){
		$badge = pokemon_badges($badge);
		if(empty($badge)){ return FALSE; }
		$badge = $badge['type'];
	}

	$CI =& get_instance();

	$query = $CI->db
		->where('uid', $user)
		->where('type', $badge)
		->order_by('date', 'DESC')
		->limit(1)
	->get('user_badges');

	if($query->num_rows() == 0){ return 0; }
	if(!$update){ return (int) $query->row()->value; }

	$data = [$query->row()->value, $query->row()->data];
	$data[1] = date("Y-m-d H:i:s", strtotime($data[1]));
	return $data;
}

function badge_register($badge, $amount, $user){
	$CI =& get_instance();
	if(is_string($badge)){
		$badge = pokemon_badges($badge);
		if(empty($badge)){ return FALSE; }
	}

	$data = [
		'uid' => $user,
		'type' => $badge['type'],
		'value' => $amount
	];

	return $CI->db->insert('user_badges', $data);
}

function badges_list($user){
	$CI =& get_instance();
	$user = (int) $user;

	$query = $CI->db
		->where_in('id', 'SELECT MAX(id) FROM user_badges WHERE uid = ' .$user .' GROUP BY type', FALSE)
		->order_by('date', 'DESC')
	->get('user_badges');

	if($query->num_rows() == 0){ return array(); }
	return array_column($query->result_array(), 'value', 'type');
}

if($pokemon->step($telegram->user->id) == "BADGE" && !$this->telegram->is_chat_group()){
	if($this->telegram->text_has("Listo", TRUE)){
		$this->telegram->send
			->text("Guay! Puedes ver todas las medallas con /badges .")
		->send();
		$this->pokemon->step($telegram->user->id, NULL);
	}elseif($this->telegram->photo() && !$telegram->has_forward){
		// Hacer OCR

		if($this->pokemon->settings($telegram->user->id, 'badge_type')){ return -1; }

		// HACK FIXME Arreglar método de acceso a última foto
		$photos = $this->telegram->dump()['message']['photo'];
		$photo = array_pop($photos);
		$photo = $photo['file_id'];

		$url = $this->telegram->download($photo);

		$temp = tempnam("/tmp", "tgphoto");
		file_put_contents($temp, file_get_contents($url));

		require_once APPPATH .'third_party/tesseract-ocr-for-php/src/TesseractOCR.php';

		$ocr = new TesseractOCR($temp);
		$text = $ocr->lang('spa', 'eng')->run();
		unlink($temp);

		$badge = NULL;
		foreach(explode("\n", $text) as $t){
			$t = trim($t);
			if(empty($t)){ continue; }
			$badge = pokemon_badges($t);
			if(!empty($badge)){ break; }
		}

		// Hide previous Keyboard
		$this->telegram->send->keyboard()->hide(TRUE);

		if(empty($badge)){
			$this->telegram->send
				->text($this->telegram->emoji(":warning: ") ."No he reconocido la medalla. Asegúrate de no recortar ni mover la pantalla.")
			->send();
			return -1;
		}

		// Set badge to settings.
		$this->pokemon->settings($telegram->user->id, 'badge_type', $badge['type']);
		$this->telegram->send
			->reply_to(TRUE)
			->force_reply(TRUE)
			->text($this->telegram->emoji(":ok: ") ."Detecto la medalla " .$badge['name'] .". ¿Cuántos puntos tienes?")
		->send();

	}elseif(
		$this->telegram->text() &&
		$this->telegram->has_reply &&
		$this->telegram->reply_user->id == $this->config->item('telegram_bot_id') &&
		$this->telegram->words() == 1
	){
		$tx = $this->telegram->text_message();
		if(strpos($tx, "Detecto la medalla") === FALSE){ return -1; } // HACK

		$amount = (int) $this->telegram->last_word();
		if($amount < 1){ return -1; }

		$badgetype = $pokemon->settings($telegram->user->id, 'badge_type');
		if(empty($badgetype)){
			$this->pokemon->step($telegram->user->id, NULL);
			return -1;
		}
		$badge = pokemon_badges($badgetype);

		$utarget = $this->telegram->user->id;
		$points = badge_points($badge['type'], $utarget);

		$str = ":ok: No ha cambiado nada desde la última vez que la pusiste.";

		if($amount < $points){
			$this->telegram->send
				->text($this->telegram->emoji(":times: ¡No puedes poner menos puntos de los que ya tienes!"))
			->send();

			return -1;
		}elseif($amount != $points){
			$badgetype = $pokemon->settings($telegram->user->id, 'badge_type', "DELETE");
			$q = badge_register($badge, $amount, $utarget);
			$str = ":warning: Error al guardar.";
			if($q){
				$str = ":ok: Guardada! Ahora tienes <b>" .$amount ."</b> en <b>" .$badge['name'] ."</b>!";

				$bt = str_replace("BADGE_", "", $badge['type']);
				$this->telegram->send
					->notification(FALSE)
					->chat(-184149677) // Grupo Medallas
					->text("BADGE: " .$telegram->user->id . " - $bt: $amount")
				->send();
			}
		}

		$str .= "\n" ."Puedes enviar otra medalla si tienes la captura.";

		$this->telegram->send
			->keyboard()
				->row_button("Listo")
			->show(TRUE, TRUE)
			->text($this->telegram->emoji($str), 'HTML')
		->send();
	}
	return -1;
}

if(
	$this->telegram->text_has(["registrar", "registro"], ["medalla", "medallas", "badge", "badges"]) &&
	$this->telegram->words() <= 5
){
	if($this->telegram->is_chat_group()){
		$str = $this->telegram->emoji(":times:") ." Dímelo por privado, por favor.";
		$this->telegram->send->keyboard()->hide(TRUE);
	}else{
		$this->telegram->send
		->keyboard()
			->row_button("Cancelar")
		->show(TRUE, TRUE);

		$str = "Puedes registrar tus medallas aquí para poder enseñarselas a tus amigos. En un futuro, hasta podrás competir con ellas!\n\n"
				."Tienes que subir (no reenviar) <b>DE UNA EN UNA</b> una captura de pantalla donde se vea el nombre de la medalla y los puntos que has conseguido.\n\n"
				."Procura no falsificar los puntos, o podrías acabar bloqueado.";

		$this->pokemon->step($telegram->user->id, 'BADGE');
	}

	$this->telegram->send
		->text($str, 'HTML')
	->send();

	return -1;
}

if(
	($telegram->text_command("badge") or
	$telegram->text_command("medalla")) and
	$telegram->words() == 3
){
	$amount = (int) $telegram->last_word(TRUE);
	$badge = pokemon_badges($telegram->words(1));

	if(empty($badge)){
		$this->telegram->send
			->text($this->telegram->emoji(":warning: Esa medalla no existe."))
		->send();

		return -1;
	}

	$utarget = $this->telegram->user->id;

	if($this->telegram->user->id == $this->config->item('creator') && $this->telegram->has_reply){
		$utarget = $this->telegram->reply_target('forward')->id;
	}

	$points = badge_points($badge['type'], $utarget);

	if($amount < $points){
		$this->telegram->send
			->text($this->telegram->emoji(":times: ¡No puedes poner menos puntos de los que ya tienes!"))
		->send();

		return -1;
	}elseif($amount == $points){
		$this->telegram->send
			->text($this->telegram->emoji(":ok: Ya estaba agregado."))
		->send();

		return -1;
	}

	$q = badge_register($badge, $amount, $utarget);
	if($q){
		$this->telegram->send
			->text($this->telegram->emoji(":ok: Registrada!"))
		->send();
	}

	return -1;
}elseif(
	($telegram->text_command("badgeocr") or $this->telegram->text_command("bocr") or $this->telegram->text_command("ocrb")) &&
	$this->telegram->user->id == $this->config->item('creator') && $this->telegram->has_reply
){

	if(!isset($this->telegram->reply->photo)){ return; }
	$photo = array_pop($this->telegram->reply->photo);
	$url = $this->telegram->download($photo['file_id']);

	$temp = tempnam("/tmp", "tgphoto");
	file_put_contents($temp, file_get_contents($url));

	require_once APPPATH .'third_party/tesseract-ocr-for-php/src/TesseractOCR.php';

	$ocr = new TesseractOCR($temp);
	$text = $ocr->lang('spa', 'eng')->run();

	$badge = NULL;
	foreach(explode("\n", $text) as $t){
		$t = trim($t);
		if(empty($t)){ continue; }
		if(($badge = pokemon_badges($t)) !== NULL){ break; }
	}

	exec("convert $temp -gravity Center -crop 16x4%+0+50 -scale 300% -posterize 2 $temp.2");
	$ocr = new TesseractOCR("$temp.2");
	$num = $ocr
		->lang('lato')
		->whitelist('1234567890,.')
		->psm(9)
	->run();

	unlink($temp);
	unlink("$temp.2");

	if(!empty($num)){
		$num = str_replace([".", ",", " "], "", $num); // HACK Revisar si es válido.
		$num = (float) trim($num);
		$num = round($num);
	}

	$amount = NULL;

	if($num > 0){ $amount = $num; }
	elseif($this->telegram->words() == 2){ $amount = (int) $this->telegram->last_word(); }

	$str = $this->telegram->emoji(":times:") ." Foto no reconocida.";

	if(!empty($badge)){
		$utarget = $this->telegram->reply_target('forward')->id;
		$points = badge_points($badge['type'], $utarget);

		if($amount < $points){
			$this->telegram->send
				->text($this->telegram->emoji(":times: ¡No puedes poner menos puntos de los que ya tienes! ($amount -> $points)"))
			->send();

			return -1;
		}elseif($amount == $points){
			$this->telegram->send
				->text($this->telegram->emoji(":ok: Ya estaba agregado."))
			->send();

			return -1;
		}

		$str = $this->telegram->emoji(":warning: Error al agregar " .$badge['name']. ".");
		$q = badge_register($badge, $amount, $utarget);
		if($q){
			$str = $this->telegram->emoji(":ok: Registro " .$badge['name'] ." a " .$amount ."!");
		}
	}

	$this->telegram->send
		->text($str)
	->send();

	return -1;
}elseif($telegram->text_command("badges")){
	$badges = pokemon_badges();
	$utarget = $this->telegram->user->id;
	if($this->telegram->user->id == $this->config->item('creator') && $this->telegram->has_reply){
		$utarget = $this->telegram->reply_target('forward')->id;
	}

	$user_badges = badges_list($utarget);

	$str = "No tienes medallas.";
	if(!empty($user_badges)){
		$str = "";
		foreach($badges as $badge){
			$n = 0;
			$value = $user_badges[$badge['type']];
			if(empty($value)){ continue; }

			$max = max(array_values($user_badges));
			$max = strlen($max);

			$icons = ['\u2796', '\ud83e\udd49', '\ud83e\udd48', '\ud83e\udd47'];

			foreach($badge['targets'] as $min){
				if($value >= $min){ $n++; }
			}

			$str .= $this->telegram->emoji($icons[$n]) ." <code>" .str_pad($value, $max, ' ', STR_PAD_LEFT) ." </code> " .$badge['name'] ."\n";
		}
	}

	$this->telegram->send
		->text($str, 'HTML')
	->send();

	return -1;
}


?>