@echo off
setlocal enabledelayedexpansion

:: Define the list of files
set files="des/dnn" "des/dpc" "des/dpc2" "des/dpc3" "des/dpc4" "des/dpc5" "des/dpc_arousing" "des/dpc_insta" "des/ndpc" "des/New_folder" "des/pinterest" "des/Shabnam_Bhabhi" "des/women" "des/sharmibf83/After" "des/sharmibf83/arab" "des/sharmibf83/arabmix" "des/sharmibf83/Arab_Boobs" "des/sharmibf83/Aunty1" "des/sharmibf83/Bangali" "des/sharmibf83/Bathing" "des/sharmibf83/Bhabhis" "des/sharmibf83/Bhojpuri" "des/sharmibf83/Bihari" "des/sharmibf83/booblover123i" "des/sharmibf83/Desi11" "des/sharmibf83/Desiii" "des/sharmibf83/Desiiiii" "des/sharmibf83/desimix" "des/sharmibf83/Desi_Aunties" "des/sharmibf83/Desi_Beeeeee" "des/sharmibf83/Erotik_wife" "des/sharmibf83/Gujju_Auntiees" "des/sharmibf83/Indian_Bangladeshi_mature_aunty_Mix" "des/sharmibf83/Indian_BBW" "des/sharmibf83/Indian_Milf" "des/sharmibf83/Irania" "des/sharmibf83/Jaipuri" "des/sharmibf83/Kannadiga" "des/sharmibf83/kimmichinami" "des/sharmibf83/Kiran_Collections" "des/sharmibf83/Maayali" "des/sharmibf83/Maheswari7" "des/sharmibf83/Maheswari8" "des/sharmibf83/Maheswari_Collections_2" "des/sharmibf83/Mallu10" "des/sharmibf83/Mallu9" "des/sharmibf83/Mallu_Aunties" "des/sharmibf83/Mallu_Auntiess" "des/sharmibf83/Marathi" "des/sharmibf83/maritza-mendez" "des/sharmibf83/Nandkok" "des/sharmibf83/Preethi_Collections" "des/sharmibf83/Rajdhani" "des/sharmibf83/Rudy" "des/sharmibf83/Sabreena" "des/sharmibf83/Saree_Auntieees" "des/sharmibf83/Seema" "des/sharmibf83/shabnam_bhabhi_full" "des/sharmibf83/Tamil2" "des/sharmibf83/Tamil_Aunty" "des/sharmibf83/Telugu" "des/sharmibf83/Telugu_Aunty" "for/bbw" "for/Bbw_lingerie" "for/Bubble" "for/for1" "for/for2" "for/for3" "for/for4" "for/for5" "for/forn" "for/fornn" "for/fornnn" "for/forr" "for/New_folder" "for/reddit/1" "for/reddit/10" "for/reddit/11" "for/reddit/12" "for/reddit/13" "for/reddit/14" "for/reddit/15" "for/reddit/16" "for/reddit/17" "for/reddit/18" "for/reddit/19" "for/reddit/2" "for/reddit/20" "for/reddit/21" "for/reddit/22" "for/reddit/23" "for/reddit/24" "for/reddit/25" "for/reddit/26" "for/reddit/27" "for/reddit/28" "for/reddit/29" "for/reddit/3" "for/reddit/30" "for/reddit/4" "for/reddit/5" "for/reddit/6" "for/reddit/7" "for/reddit/8" "for/reddit/9"

:: Set the Git branch
set branch=master

:: Loop through each file and perform Git commands
for %%f in (%files%) do (
    set file=%%f
    git add !file!
    git commit -m "!file!"
    git push origin %branch%
)

endlocal
