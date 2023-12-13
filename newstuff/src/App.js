import { useEffect, useState } from "react";

function App() {
  const [objects, setObjects] = useState([]);

  useEffect(() => {
    async function getData(){
      const response = await fetch("http://localhost/");
      const data = await response.json();
      console.log(data);
      setObjects(data);
    }
    getData();
  }, [] );

  const objectsJSX = objects.map((object, index) => {
    return (
      <div key={index}>
        <p>{object.color}</p>
      </div>
    );
    });


  return (
    <>
      <h2>Rectangle</h2>
      {objectsJSX}
     
      
    </>

  );
}

export default App;
