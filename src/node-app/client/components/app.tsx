import React from "react";

export const App: React.FC = () => <p><button onClick={() => {
    alert(window.location.href);
}}>click</button></p>;
