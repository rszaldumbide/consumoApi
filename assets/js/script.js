document.querySelector("#search").addEventListener("click", getCodigos);

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function lowerCaseName(string) {
    return string.toLowerCase();
}

function getCodigos(e) {

    const username = document.querySelector("#usunames").value; //aqui se toma el valor que quieres buscar en la api, por ejemplo busca por id
    const usunames = lowerCaseName(username);

    fetch(`https://jsonplaceholder.typicode.com/users/${usunames}`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".usuariobox").innerHTML = `
        <div class="container mt-1 p-5 border card-primary bg-light col-lg-6">
            <h1 class="text-center">Datos del Usuario</h1> 
            <div class="form-group col-auto mb-4"> 
                <label for="usu">Usuario:</label> 
                <input type="text" class="form-control" id="us" value="${capitalizeFirstLetter(data.username)}">
            </div> 
            <div class="form-group col-auto mb-4"> 
                <label for="name">Nombre:</label> 
                <input type="text" class="form-control" id="name" value="${data.name}"> 
            </div> 
            <div class="form-group col-auto mb-4"> 
                <label for="email">Email:</label> 
                <input type="email" class="form-control" id="email" value="${data.email}"> 
            </div> 
            <div class="form-group col-auto mb-4"> 
                <label for="tel">Telefono:</label> 
                <input type="tel" class="form-control" id="tel" value="${data.phone}"> 
            </div> 
            <div class="form-group col-auto mb-4"> 
                <label for=" web">Pagina Web:</label> 
                <input type="text" class="form-control" id="web" value="${data.website}"> 
            </div> 
            <div class="text-center col-auto mb-4"> 
                <input type="submit" class="btn btn-dark" value="Enviar"> 
            </div>
        </div>`;
        })
        .catch((err) => {
            document.querySelector(".usuariobox").innerHTML = `
            <div class="container mt-1 p-5 border card-primary bg-light col-lg-6">
            <h3 class="text-center">Datos del Usuario</h3>
            <br>
                <h5>No existe ese usuario</h5>
                <p>(*/ω＼*)</p>
            </div>
    `;
            console.log("no encontrado", err);
        });

    e.preventDefault();

}
