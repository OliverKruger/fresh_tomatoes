export default class Cookie {
    constructor() {
    }

    async cookieEllerHvad() {
        try {
            const responseCookie = await this.skalJegGiveCookie(true);


            const responseSize = await this.erDetEnStorKage('small');

        } catch (error) {

        }

    }


    skalJegGiveCookie(erJegKommetForSent) {
        return new Promise((resolve, reject) => {

            setTimeout(() => {
                if (erJegKommetForSent) {
                    resolve("Oliver giver cookie");

                } else {
                    reject("Not today");
                }

            }, 2000)

        });
    }

    erDetEnStorKage(size) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {

                if (size === "small") {
                    reject("Nej for lille");
                } else if (size === "medium") {
                    reject('nej stadig for lille')
                } else {
                    resolve("ja man!! bring it")
                }
                ;


            }, 2000)
        });

    }
}