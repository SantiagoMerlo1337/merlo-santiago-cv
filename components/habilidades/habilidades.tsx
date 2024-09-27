const Habilidades = () => {
    return (
        <section>
            <h3 className="h3">Habilidades</h3>
            <ul className="list-none md:list-disc ms-0 md:ms-7">
                <li className="mb-2">
                    <h4 className="h4">Frontend</h4>
                    <p>
                        HTML, CSS, Bootstrap, Tailwind, Javascript, Typescript, React, Next js, Astro, Django
                    </p>
                </li>
                <li className="mb-2">
                    <h4 className="h4">Backend</h4>
                    <p>C#, .NET, Python, API REST, MVC</p>
                </li>
                <li className="mb-2">
                    <h4 className="h4">Bases de Datos</h4>
                    <p>
                        SQL, MySQL, SQL Server, MongoDB, Modelado de datos
                    </p>
                </li>
                <li className="mb-2">
                    <h4 className="h4">Controlador de versiones</h4>
                    <p>Git, GitHub</p>
                </li>
                <li className="mb-2">
                    <h4 className="h4">Otros</h4>
                    <p>UML, Adobe Photoshop e Illustrator, Inkscape, GIMP, paquete Office</p>
                </li>
                <li className="mb-2">
                    <h4 className="h4">Idiomas</h4>
                    <p>Español (Nativo), Inglés (Intermedio)</p>
                </li>
            </ul>
        </section>
    );
};

export default Habilidades;
