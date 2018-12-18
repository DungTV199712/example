import { Injectable } from '@angular/core';

@Injectable({
    providedIn: 'root'
})
export class YoutubeService {
    playlist = [
        {id: 'PTQZlPYmWpE', song: 'Vicetone - 2018 End of the Year Mix'},
        {id: 'KUPvbSdBTZE', song: 'Nicky Romero & Stadiumx - Rise (ft. Matluck)'},
        {id: 'N6O2ncUKvlg', song: 'Nelly - Just A Dream'},
        {id: 'uelHwf8o7_U', song: 'Eminem - Love The Way You Lie ft. Rihanna'},
        {id: 'WpYeekQkAdc', song: 'The Black Eyed Peas - Where Is The Love?'}
    ];
    constructor() { }
    find(id: string) {
        return this.playlist.find(item => item.id === id);
    }
}