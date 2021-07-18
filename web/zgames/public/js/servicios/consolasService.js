//ESTE ARCHIVO VA A TENER LAS OPERACIONES TIPICAS PARA COMUNICARSE CON EL CONTROLADOR

//getConsolas
//la funcion es async porque tiene que hacer una peticion al servidor
const getConsolas = async ()=>{ //esto lo que hara es una peticion al url que tiene que ver el getConsolas
    let resp = await axios.get("api/consolas/get"); //la ruta es api, por el archivo api, y el resto se entiende
    return resp.data;
};
//crearConsola

const crearConsola = async (consola)=>{ //arrow functions
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/consolas/post", consola, {
        headers:{
            "Content-Type": "aplication/json"
        }
    }); 
    return resp.data;//Este data corresponde a la propiedad de axios que trae los datos, es decir las cosas que manda php vienen ahi
};