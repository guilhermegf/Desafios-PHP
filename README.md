# infoideias

Desafios PHP usados em sala de aula no SENAC Catalão

1. Desafio: Escreva uma função em PHP que determine se um número é um número primo ou não.
Um número é considerado primo se for divisível apenas por 1 e por ele mesmo. A função deve receber um número como argumento e retornar "verdadeiro" se o número for primo e "falso" caso contrário.
Dica: Uma forma de verificar se um número é primo é testar se ele é divisível por todos os números inteiros de 2 até a sua raiz quadrada.

2. Desafio: Escreva uma função em PHP que determine se uma frase é um palíndromo ou não.
Uma frase é considerada um palíndromo se, ao remover todos os espaços e acentos, ela permanecer igual quando lida de trás para frente. Por exemplo, "A grama é amarga" é um palíndromo, pois, ao removermos os espaços e acentos, a frase se torna "agrameamarga", que é igual quando lida de trás para frente.
A função deve receber uma string contendo a frase e retornar "verdadeiro" se a frase for um palíndromo e "falso" caso contrário. Para isso, a função deve utilizar a função str_replace para remover os espaços e a função strtolower para transformar todos os caracteres em minúsculos. Além disso, deve ser utilizada a função tirarAcentos para remover todos os acentos da frase.
Por fim, a função deve comparar a string original com sua versão invertida, que pode ser obtida utilizando a função strrev. Se as duas strings forem iguais, a função retorna "verdadeiro". Caso contrário, retorna "falso".
O código inclui um exemplo de uso da função, que passa a frase "A grama é amarga" como argumento e exibe na tela se é ou não um palíndromo.

3. Desafio: Escreva uma função em PHP que calcule a área de um polígono de n lados, sendo que o comprimento de cada lado é igual a 1 unidade.
A função deve receber como argumento o número de lados do polígono (n) e retornar a área total. Para isso, a função deve calcular a área de cada um dos polígonos menores que compõem o polígono de n lados, até chegar ao polígono de 1 lado, que possui área igual a 1.
Para calcular a área de um polígono de n lados, é necessário dividir o polígono em n triângulos isósceles, que possuem um ângulo interno de 360/n graus e uma base de comprimento 1. A altura desses triângulos pode ser calculada utilizando a fórmula do seno: h = (1/2)*sin(180/n). A área de cada triângulo é dada por A = (1/2)bh, onde b é a base (comprimento do lado do polígono).
A área total do polígono é dada pela soma das áreas de todos os triângulos. O código inclui uma função que implementa esse algoritmo e um exemplo de uso, que calcula a área de um polígono de 7 lados.

4. Desafio: Dado um array de números inteiros, implemente uma função em PHP chamada "SequenciaCrescente" que determine se é possível obter uma sequência crescente removendo apenas um elemento do array. Se a sequência crescente puder ser obtida, retorne true, caso contrário, retorne false.
Para isso, a função implementa a função auxiliar "Verifica" para verificar se um determinado array é uma sequência crescente. A função principal "SequenciaCrescente" faz um loop sobre o array original e remove um elemento por vez, passando o array resultante para a função "Verifica". Se "Verifica" retorna verdadeiro, significa que é possível obter uma sequência crescente removendo apenas um elemento e, portanto, a função principal retorna true. Caso contrário, a função principal continua removendo elementos até que todos sejam testados e retorne false.

Licença
Este projeto está licenciado sob a licença Creative Commons Attribution 4.0 International.
