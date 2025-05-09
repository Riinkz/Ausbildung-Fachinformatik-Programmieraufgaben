#include <iostream>
using namespace std;

int main() {
    // Variablen für die IP-Adressen und die Subnetzmaske
    int ip1[4], ip2[4], subnetMask[4];
    cout << "Bitte die 1. IP-Adresse eingeben: ";
    cin >> ip1[0] >> ip1[1] >> ip1[2] >> ip1[3]; 
    cout << "Bitte die 2. IP-Adresse eingeben: ";
    cin >> ip2[0] >> ip2[1] >> ip2[2] >> ip2[3];
    cout << "Bitte die Subnet-Mask eingeben: ";
    cin >> subnetMask[0] >> subnetMask[1] >> subnetMask[2] >> subnetMask[3];

    // Netzadresse berechnen und ausgeben
    int networkAddress1[4], networkAddress2[4];
    for (int i = 0; i < 4; ++i) {
        networkAddress1[i] = ip1[i] & subnetMask[i];
        networkAddress2[i] = ip1[i] & subnetMask[i];
    }
    // Ausgabe der Netzadressen
    cout << "Die 1. Netzadresse lautet: "
                << networkAddress1[0] << '.' << networkAddress1[1] << '.' << networkAddress1[2] << '.' << networkAddress1[3] << endl;
    cout << "Die 2. Netzadresse lautet: "
                << networkAddress2[0] << '.' << networkAddress2[1] << '.' << networkAddress2[2] << '.' << networkAddress2[3] << endl;
    return 0;
}