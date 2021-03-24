import React, { Component } from "react";
import ReactDOM from "react-dom";
import Sto from "./Sto";

export default class Stolovi extends Component {
    constructor(props) {
        super(props);

        this.state = {
            stolovi: [],
            ime_gost: "",
            broj_telefona: ""
        };
        this.fetchStolovi();
    }

    fetchStolovi() {
        axios.get("http://127.0.0.1:8000/stolovi/fetch").then(res => {
            const stolovi = res.data.stolovi;
            this.setState({ stolovi: stolovi });
        });
    }

    noviGostInput(e) {
        const vrednost = e.target.value;
        const imeElementa = e.target.name;

        this.setState({
            [imeElementa]: vrednost
        });
    }

    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-2">
                        <input
                            type="text"
                            name="ime_gost"
                            placeholder="Ime gosta"
                            onChange={this.noviGostInput.bind(this)}
                        ></input>
                    </div>
                    <div className="col-2">
                        <input
                            id="broj"
                            type="text"
                            name="broj_telefona"
                            placeholder="Broj telefona"
                            onChange={this.noviGostInput.bind(this)}
                        ></input>
                    </div>
                    <div className="col">
                        Kliknite neki od slobodnih stolova za rezervaciju
                    </div>
                </div>
                <div className="row">
                    {this.state.stolovi.map(sto => {
                        return (
                            <div className="col-2">
                                <Sto
                                    key={sto.id}
                                    broj_telefona={this.state.broj_telefona}
                                    ime_gost={this.state.ime_gost}
                                    sto={sto}
                                />
                                <br></br>
                            </div>
                        );
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById("stolovi")) {
    ReactDOM.render(<Stolovi />, document.getElementById("stolovi"));
}
