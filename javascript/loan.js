const loanAmountInput = document.querySelector(".loan-amount");
const interestRateInput = document.querySelector(".interest-rate");
const loanTenureInput = document.querySelector(".loan-tenure");

const loanEMIvalue = document.querySelector(".loan-emi .value");
const totalInterestValue = document.querySelector(".loan-interest .value");
const totalAmountValue = document.querySelector(".total-amount .value");

const calculateBtn = document.querySelector(".calculate-button");

let loanAmount = parseFloat(loanAmountInput.value);
let interestRate = parseFloat(interestRateInput.value);
let loanTenure = parseFloat(loanTenureInput.value);

let interest = interestRate / 12 / 100;

const calculateEMI = () => {
    let emi = 
    loanAmount *
    interest *
    (Math.pow(1 + interest, loanTenure) / 
      (Math.pow(1 + interest, loanTenure) - 1));

    return emi;
};

const updateDate = (emi) => {
     loanEMIvalue.innerHTML = Math.round(emi);

     let totalAmount = Math.round(loanTenure * emi);
     totalAmountValue.innerHTML = totalAmount;

     let totalInterestPayable = Math.round(totalAmount - loanAmount);
     totalInterestValue.innerHTML = totalInterestPayable;

};

const init = () => {
  let emi = calculateEMI ();
  updateData(emi);
};
init();

