import React from 'react';
import ReactDOM from 'react-dom';
import DayPicker from "react-day-picker";
import "react-day-picker/lib/style.css";

function Example() {
    return <DayPicker />;
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>
                        <div> byby dejau</div>
                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
