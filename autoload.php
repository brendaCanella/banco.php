<?php


// spl_autoload_register(function (string $nomeCompletoDaClasse) {
// 	$caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
// 	$caminhoArquivo .= '.php';
// 	echo $caminhoArquivo . PHP_EOL;

// 	if (file_exists($caminhoArquivo)) {
// 		require_once $caminhoArquivo;
// 	}
// });



spl_autoload_register(function (string $nomeCompletoDaClasse) {
	$prefixo = 'Alura\\Banco\\';
	$diretorioBase = 'src' . DIRECTORY_SEPARATOR;

	$nomeRelativoDaClasse = substr($nomeCompletoDaClasse, strlen($prefixo));
	$caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $nomeRelativoDaClasse); // Corrigido aqui

	$caminhoArquivo = $diretorioBase . $caminhoArquivo . '.php';
	// print $caminhoArquivo . "\n";

	if (file_exists($caminhoArquivo)) {
		
		require_once $caminhoArquivo;
	}
});
