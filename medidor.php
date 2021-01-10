<?php


$sua_idade = readline('【#】inserir PIN da SENHA: ');
$idade_sua = readline('【#】VOCE DESEJA CONCLUIR O CADASTRO? ');
if ($sua_idade == $idade_sua) {
          echo " 【✘】𝗘𝗥𝗥𝗢 𝗡𝗢 𝗖𝗔𝗗𝗔𝗦𝗧𝗥𝗢 !! ";
} elseif ($sua_idade > $idade_sua) {
          echo " 【✔】𝗩𝗢𝗖𝗘 𝗝𝗔 𝗣𝗢𝗗𝗘 𝗚𝗘𝗥𝗔𝗥";
          echo " 𝗢 𝗦𝗘𝗨 ₡₡ card !! ";
} else {
          echo " 【✔】𝗩𝗢𝗖𝗘 𝗝𝗔 𝗣𝗢𝗗𝗘 𝗚𝗘𝗥𝗔𝗥";
          echo " 𝗢 𝗦𝗘𝗨 ₡₡ card !! ";
}

?>

