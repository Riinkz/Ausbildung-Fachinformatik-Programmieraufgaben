#include <iostream>
using namespace std;

int main() {
    int Dividend = 0;
    int Divisor = 0;
    cout << "Gebe zwei Zahlen, getrennt durch ein Leerzeichen, ein: ";
    cin >> Dividend >> Divisor;
    int Rest = Dividend;
    while (Rest >= Divisor) {
        Rest -= Divisor;
    }
    cout << "Der Rest der Division von " << Dividend << " durch " << Divisor << " ist: " << Rest << endl;
    return 0;
}