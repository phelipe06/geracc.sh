<?php


$sua_idade = readline('【#】COLOQUE SEU NOME: ');
$idade_sua = readline('【#】INSIRA UMA SENHA: ');
if ($sua_idade == $idade_sua) {
          echo " 【✘】 𝗖𝗔𝗗𝗔𝗦𝗧𝗥𝗢 𝗥𝗘𝗖𝗨𝗦𝗔𝗗𝗢 !!";

} elseif ($sua_idade > $idade_sua) {
        echo " 【≠】𝗖𝗔𝗗𝗔𝗦𝗧𝗥𝗢 𝗘𝗠 𝗔𝗡𝗗𝗔𝗠𝗘𝗡𝗧𝗢 !!";
} else {
          echo " 【✔】𝗖𝗔𝗗𝗔𝗦𝗧𝗥𝗢 𝗔𝗖𝗘𝗜𝗧𝗢  !! ";

}

?>

