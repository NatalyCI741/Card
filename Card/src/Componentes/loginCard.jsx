import React from "react";
import logo from "../img/X.jpg"; // Importa correctamente la imagen del logo
import fondo from "../img/fondo.jpeg";  // Importa correctamente la imagen de fondo

const LoginCard = () => {
  // Aquí aplicamos el fondo en línea
  const backgroundStyle = {
    backgroundImage: `url(${fondo})`,  // Usamos la variable importada
    backgroundSize: "cover",           // Esto asegura que la imagen cubra todo el contenedor
    backgroundPosition: "center",      // Centra la imagen
    backgroundRepeat: "no-repeat",     // Evita que la imagen se repita
    height: "100vh",                   // Asegura que ocupe toda la altura de la pantalla
    display: "flex",
    justifyContent: "center",
    alignItems: "center"
  };

  return (
    <div style={backgroundStyle}>
      <div className="card login-card">
        <div className="card-header text-center">
          <img src={logo} alt="Logo" className="rounded-circle" />
          <h3>SysEduc@</h3>
          <p>Sistema para la Administración y Gestión de Instituciones Educativas</p>
          <hr className="line-divider" />
        </div>
        <div className="card-body">
          <form>
            <div className="form-group">
              <label htmlFor="username">Nombre de usuario*</label>
              <input
                type="text"
                id="username"
                className="form-control"
                placeholder="Ingrese su usuario"
              />
            </div>
            <div className="form-group">
              <label htmlFor="password">Contraseña*</label>
              <input
                type="password"
                id="password"
                className="form-control"
                placeholder="Ingrese su contraseña"
              />
            </div>
            <button type="submit" className="btn btn-primary btn-block">
              Entrar
            </button>
          </form>
          <div className="text-center mt-3">
            <a href="#" className="text-muted">
              ¿Contraseña olvidada?
            </a>
          </div>
        </div>
      </div>
    </div>
  );
};

export default LoginCard;
