// // Função para redirecionar para a versão correta do site com base na localização
// function redirecionarVersaoDoSite(localizacao) {
//     if (localizacao === 'US') {
//         // Se a localização for nos EUA, redireciona para a versão em inglês
//         window.location.href = 'en.blade.php'; // Redireciona para a versão em inglês
//     } else {
//         // Caso contrário, redireciona para a versão padrão (em inglês)
//         window.location.href = 'en.blade.php'; // Redireciona para a versão em inglês
//     }
// }

// // Função para lidar com erros na obtenção da localização
// function erroNaLocalizacao() {
//     console.error('Não foi possível obter a localização do usuário.');
//     // Neste caso, redireciona para a versão padrão (em inglês)
//     window.location.href = 'en.blade.php'; // Redireciona para a versão em inglês
// }

// // Verifica se o navegador suporta a API de Geolocalização
// if (navigator.geolocation) {
//     // Obtém a localização do usuário
//     navigator.geolocation.getCurrentPosition(function(position) {
//         // Obtém o país a partir das coordenadas de latitude e longitude
//         // Aqui você pode usar uma API de geocodificação para obter o país com mais precisão
//         // Mas para simplificar, vamos apenas assumir que os EUA têm latitude entre 24 e 49 e longitude entre -125 e -67
//         if (position.coords.latitude > 24 && position.coords.latitude < 49 && position.coords.longitude > -125 && position.coords.longitude < -67) {
//             redirecionarVersaoDoSite('US'); // Redireciona para a versão em inglês para os EUA
//         } else {
//             redirecionarVersaoDoSite('BR'); // Redireciona para a versão padrão (em inglês) para outros países
//         }
//     }, erroNaLocalizacao);
// } else {
//     console.error('Seu navegador não suporta a API de Geolocalização.');
//     // Neste caso, redireciona para a versão padrão (em inglês)
//     window.location.href = 'en.blade.php'; // Redireciona para a versão em inglês
// }



// // Função para carregar a versão do site com base na localização do usuário
// function carregarVersaoDoSite(localizacao) {
//     // Se a localização for dos Estados Unidos, carrega a versão em inglês
//     if (localizacao === 'US') {
//         window.location.href = 'en.blade.php'; // Redireciona para a versão em inglês
//     } else {
//         // Caso contrário, carrega a versão em português (padrão)
//         window.location.href = 'pt.blade.php'; // Redireciona para a versão em português
//     }
// }

// // Função para lidar com erros na obtenção da localização
// function erroNaLocalizacao() {
//     console.error('Não foi possível obter a localização do usuário.');
//     // Neste caso, carrega a versão padrão do site em português
//     window.location.href = 'pt.blade.php'; // Redireciona para a versão em português (padrão)
// }

// // Verifica se o navegador suporta a API de Geolocalização
// if (navigator.geolocation) {
//     // Obtém a localização do usuário
//     navigator.geolocation.getCurrentPosition(function(position) {
//         // Obtém o país a partir das coordenadas de latitude e longitude
//         // Aqui você pode usar uma API de geocodificação para obter o país com mais precisão
//         // Mas para simplificar, vamos apenas assumir que os EUA têm latitude entre 24 e 49 e longitude entre -125 e -67
//         if (position.coords.latitude > 24 && position.coords.latitude < 49 && position.coords.longitude > -125 && position.coords.longitude < -67) {
//             carregarVersaoDoSite('US'); // Carrega a versão em inglês para os EUA
//         } else {
//             carregarVersaoDoSite('BR'); // Carrega a versão em português (padrão) para outros países
//         }
//     }, erroNaLocalizacao);
// } else {
//     console.error('Seu navegador não suporta a API de Geolocalização.');
//     // Neste caso, carrega a versão padrão do site em português
//     window.location.href = 'pt.blade.php'; // Redireciona para a versão em português (padrão)
// }


// // Função para redirecionar com base na localização do usuário
// function redirecionarPorLocalizacao() {
//     // Verifica se o navegador suporta a geolocalização
//     if (navigator.geolocation) {
//         // Obtém a posição do usuário
//         navigator.geolocation.getCurrentPosition(function(position) {
//             // Obtém as coordenadas de latitude e longitude
//             var latitude = position.coords.latitude;
//             var longitude = position.coords.longitude;

//             // Verifica se as coordenadas estão dentro da América do Norte
//             if (latitude > 25 && latitude < 60 && longitude > -170 && longitude < -50) {
//                 // Redireciona para a versão em inglês
//                 window.location.href = '/en';
//             } else if (latitude > -35 && latitude < 5 && longitude > -75 && longitude < -35) {
//                 // Redireciona para a versão em português (Brasil)
//                 window.location.href = '/pt';
//             } else {
//                 // Redireciona para a versão em inglês para qualquer outro lugar do mundo
//                 window.location.href = '/en';
//             }
//         });
//     } else {
//         // Navegador não suporta geolocalização, redireciona para a versão em inglês por padrão
//         window.location.href = '/en';
//     }
// }

// // Chama a função para redirecionar
// redirecionarPorLocalizacao();