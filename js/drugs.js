const produtos = [
    {
        image: '../img/products/blue_pill.png',
        name: 'Trevo Azul',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0029,

        brl: 'R$ 85,00'
    },
    {
        image: '../img/products/green_pill.png',
        name: 'Floco de Neve Verde',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0045,
        brl: 'R$ 130,00'
    },
    {
        image: '../img/products/maria_1.png',
        name: 'Mario Super Drogas',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0021,
        brl: 'R$ 60,00' 
    },
    {
        image: '../img/products/purple_pill.png',
        name: 'Flor Roxa',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0021,
        brl: 'R$ 60,00'
    },
    {
        image: '../img/products/super_man_1.png',
        name: 'Super Drogas',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0021,
        brl: 'R$ 60,00'
    },
    {
        image: '../img/products/red_pill.png',
        name: 'Pílula Vermelha',
        desc: '70MG DE MDMA POR COMPRIMIDO',
        btc: 0.0013,
        brl: 'R$ 40,00'
    },
]

const seila = () => {
    produtos.forEach(({image, name, desc, btc}) => {
        const card = document.querySelector('.container')
        card.innerHTML += `
        <div class="card_shop">
            <img src="${image}" alt="">
            <h3>${name}</h3>
            <p>${desc}</p>
            <a href="#" class="btc">${btc} BTC</a>
        </div>
        `
    })
}

const produtos2 = [
    {
        image: '../img/products/pink_pill.png',
        name: 'DIABINHO SORRIDENTE',
        stars: 5,
        novo: 'Novidade',
        desc: 'Conheça a mais nova edição da nossa linha exclusiva de comprimidos do nosso parceiro goodtimes. Sinta o sabor de framboesa, cada comprimido contém 130mg de mdma e um toque de sabor natural. Disponível a partir do próximo mês.'
    },
    {
        image: '../img/products/yellow_pill.png',
        name: 'CONFUSO',
        stars: 4,
        novo: 'Novidade',
        desc: 'Já se perguntou por que ecstasy parece bala mas nunca tem sabor? Experimente o sabor cítrico de limão. Cada comprimido contém 125mg de mdma e um toque de sabor natural. Disponível por tempo limitado apenas para membros premium.'
    },
    {
        image: '../img/products/tadalafelas.png',
        name: 'TADALAFELLAS',
        stars: 5,
        novo: 'Mais Vendido',
        desc: 'O mais vendido! 100mg de Tadalafila por comprimido. Potência e confiança para sua noite.'
    }
]

produtos2.forEach(({image, name, stars, novo, desc}) => {
    let newStars = ''
    for (let i = 0; i < stars; i++) {
        newStars += `<i class="fas fa-star"></i>` 
    }
    const section = document.querySelector('section')
    section.innerHTML += `
    
    <div class="card_shop2">
      <img src="${image}" alt="">
      <h1>${name}</h1>
      <div class="stars">
        ${newStars}
      </div>
      <p class="rgb">${novo}</p>
      <p class="card_shop2_text">${desc}</p>
    </div>
    
    `
})

seila()