import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Sto extends Component {
    constructor(props) {
        super(props);

        this.state = {
            sto: this.props.sto
        };
        this.rezervisi = this.rezervisi.bind(this);
        this.isRezervisan = this.isRezervisan.bind(this);
    }

    rezervisi() {
        axios
            .post(
                "http://127.0.0.1:8000/gosti/dodaj?ime_gost=" +
                    this.props.ime_gost +
                    "&broj_telefona=" +
                    this.props.broj_telefona
            )
            .then(res => {
                alert("Kreiram gosta " + this.props.ime_gost);
                return axios.post(
                    "http://127.0.0.1:8000/rezervacije/rezervisi?gost_id=" +
                        res.data.gost_id +
                        "&sto_id=" +
                        this.state.sto.id
                );
            })
            .then(res => {
                if (!res.data.uspesanKod) {
                    alert(res.data.mess);
                    return;
                }
                return axios.put(
                    "http://127.0.0.1:8000/sto/rezervisi?sto_id=" +
                        this.state.sto.id
                );
            })
            .then(res => {
                let sto = this.state.sto;
                sto.rezervisan = 1;
                this.setState({ sto: sto });
                alert(res.data.mess);
            });
    }

    isRezervisan() {
        return this.state.sto.rezervisan;
    }

    render() {
        return (
            <button
                className={
                    " " + this.isRezervisan() == 1
                        ? "btn btn-info btn-block disabled"
                        : "btn btn-info btn-block "
                }
                disabled={this.isRezervisan()}
                onClick={this.rezervisi}
            >
                {this.state.sto.id} ({this.state.sto.broj_mesta})
            </button>
        );
    }
}

if (document.getElementById("sto")) {
    ReactDOM.render(<Sto />, document.getElementById("sto"));
}
