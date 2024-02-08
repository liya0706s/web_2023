const inputKeywords = document.getElementById("input-keywords");
const submitButton = document.getElementById("submit");
const musicContainer = document.querySelector(".music-container");

submitButton.addEventListener("click", () => {
    getSongData();
})

async function getSongData() {
    const url = `https://shazam.p.rapidapi.com/search?term=${inputKeywords.value}&locale=en-us&offset=0&limit=5`;
    const option = {
        method: "GET",
        headers: {
            // "X-RapidAPI-Key": "688268f40msh69176cddbc5ed7bp1008d5jsn1f63b7d6afe9",
            "X-RapidAPI-Key":"be7f458c43msh37c3da181e01b9dp13df85jsne1168d69bed5",
            "X-RapidAPI-Host": "shazam.p.rapidapi.com"
        },
    };
    
    const response = await fetch(url, option);
    const results = await response.json();
    
    setSongDataDisplay(results);
}

function setSongDataDisplay(results) {
    musicContainer.innerHTML = `
    <div class="container music-card">
                <div class="col">
                    <div>
                        <img src=${results.tracks.hits[0].track.images.coverart} alt="" class="song-img">
                        <h4 id="title">${results.tracks.hits[0].track.title}</h4>
                        <a href=${results.tracks.hits[0].track.url} id="url">${results.tracks.hits[0].track.url}</a>
                    </div>
                    <hr>
                    <div>
                        <img src=${results.tracks.hits[0].track.image.background} alt="" class="artist-img" id="artist-img">
                        <p id="artist-text">${results.tracks.hits[0].track.subtitle}</p>
                    </div>
                </div>
            </div>
    `;
}