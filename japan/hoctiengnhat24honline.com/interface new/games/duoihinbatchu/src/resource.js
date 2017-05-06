var res = {
    Questions_json: "res/data/questions.txt",
    BackgroundGame_png: "res/background-game.png",
    TextBox_png: "res/char-box-visible.png",
    OkeHide_png: "res/oki-hide.png",
    OkeShow_png: "res/oki-show.png",
    CharBox_Visible_png: "res/char-box-visible.png",
    CharBox_Hidden_png: "res/char-box-hidden.png",
    GameOverBoard_png: "res/board.png",
    Replay1_png: "res/replay.png",
    Replay2_png: "res/replay-select.png",
    Next_png: "res/next.png",
    Next_Select_png: "res/next-select.png",
    NextStageBoard_png: "res/board.png",
    PlayGame_png: "res/main_menu/playButton.png",
    PlayGameSelect_png: "res/main_menu/playSelectButton.png",
    Light_png: "res/main_menu/light.png",
    Logo_png: "res/main_menu/logo.png",
    BUTTON_CLICK: "res/sounds/button_click.mp3",
    HELP: "res/sounds/use_help.mp3",
    LOSE: "res/sounds/lose_1.mp3",
    WIN: "res/sounds/win_2.mp3",
    TIME_UP: "res/sounds/early_timeup.mp3",
    HELPTEXT_PNG: "res/help-text.png",
    HELPTEXT_SELECT_PNG: "res/help-text-select.png",
    FG_TIME_CYAN_PNG: "res/fg-time-cyan.png"
};


var g_resources = [];
for (var i in res) {
    g_resources.push(res[i]);
}
res.FontCustom = "Birthday";
res.Congrat1 = "Bạn Trả Lời Tốt Lắm =))";
res.Congrat2 = "Bạn Trả Lời Tốt Lắm ^^!";
res.Congrat3 = "Bạn Trả Lời Tốt Lắm :))";