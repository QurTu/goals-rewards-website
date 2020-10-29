import React from "react";
import ReactDOM from 'react-dom';
import DayPicker from "react-day-picker";
import "react-day-picker/lib/style.css";

export default function Hello() {
  return <DayPicker />;
}




if (document.getElementById('daypicker')) {
    ReactDOM.render(<Day />, document.getElementById('daypicker'));
}