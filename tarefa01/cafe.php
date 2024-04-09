

<link rel="stylesheet" href="style.css">
<?php
$produtosCafe = [
	[
    'nome' => "Café Cremoso",
    'descricao' => "Café cremoso irresistivelmente suave e que envolve seu paladar",
    'preco' => "5.00",
    'imagem' => "img/cafezin.png"
	],
	[
    'nome' => "Café com Leite",
    'descricao' => "A harmonia do café e do leite, uma experiência reconfortante",
    'preco' => "2.00",
    'imagem' => "img/cafe_com_leite.png"
	],
  [
    "nome" => "Cappuccino",
    "descricao" => "Café suave, leite cremoso e uma pitada de sabor adocicado",
    "preco" => "7.00",
    "imagem"=> "img/capuccino.png"
  ],
  [
    "nome" => "Café Gelado",
    "descricao" => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
    "preco" => "3.00",
    "imagem"=> "img/café gelado.png"
  ]
];
	
$produtosAlmoco = [
	[
    "nome" => "Bife",
    "descricao" => "Bife, arroz com feijão e uma deliciosa batata frita",
    "preco" => "27.90",
    "imagem" => "img/bife.png"
  ],
  [
    "nome" => "Filé de peixe",
    "descricao" => "Filé de peixe salmão assado, arroz, feijão verde e tomate.",
    "preco" => "24.99",
    "imagem" => "img/file-peixe.png"
  ],
  [
    "nome" => "Frango",
    "descricao" => "Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante",
    "preco" => "23.00",
    "imagem" => "img/frango.png"
  ],
  [
    "nome" => "Fettuccine",
    "descricao" => "Prato italiano autêntico da massa do fettuccine com peito de frango grelhado",
    "preco" => "22.50",
    "imagem" => "img/fetuccine.png"
  ]
];
?>
<?php  foreach ($produtosCafe as $Cafe);
?>
<div class="container-cafe-manha-produtos">
    <?php foreach ($produtosCafe as $cafe) { ?>
        <div class="container-produto">
            <div class="container-foto">
                <img src="<?= $cafe['imagem'] ?>" width="300px">
            </div>
            <p><?= $cafe['nome'] ?></p>
            <p><?= $cafe['descricao'] ?></p>
            <p><?= "R$ " . $cafe['preco'] ?></p>
        </div>
    <?php } ?>
</div>

<hr>
<hr>

<div class="container-produtos-almoco">
    <?php foreach ($produtosAlmoco as $almoco) { ?>
        <div class="container-produto">
            <div class="container-foto">
                <img src="<?= $almoco['imagem'] ?>" width="300px">
            </div>
            <p><?= $almoco['nome'] ?></p>
            <p><?= $almoco['descricao'] ?></p>
            <p><?= "R$ " . $almoco['preco'] ?></p>
            
        </div>
        
    <?php } ?>
</div>