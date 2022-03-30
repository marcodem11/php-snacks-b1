<?php 

/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 */

$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum nec neque eu aliquam. 
Aenean ultrices, eros at malesuada varius, ipsum nisl tristique ligula, eu porttitor justo lacus et ipsum. 
Quisque in egestas magna, et condimentum felis. In feugiat egestas lorem, tempor fermentum leo condimentum eu. 
Aliquam ligula diam, iaculis eget elementum non, cursus quis dolor. Mauris auctor sapien sed mattis tincidunt. 
Vestibulum dignissim vestibulum magna, vel fringilla enim gravida ac. 
Integer vel diam sapien. Sed congue feugiat elit, a egestas est mattis eget. 
Praesent laoreet, mauris vel tincidunt consequat, felis elit tincidunt ex, in tempor nisl lectus vel mi. 
Integer ullamcorper tortor dolor, luctus vehicula nisl blandit at. Curabitur vel efficitur lorem. 
Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
Vivamus sed elit vitae mi laoreet pharetra viverra at tortor. Ut nec arcu interdum tortor lacinia gravida.';

echo "<p>$paragrafo</p>";

$paragrafi = explode('. ', $paragrafo);
//var_dump($paragrafi);

echo "<h2>Nuovi Paragrafi: </h2>";

for ($i = 0; $i < count($paragrafi); $i++) {

    echo "<p>$paragrafi[$i].</p>";
}

?>