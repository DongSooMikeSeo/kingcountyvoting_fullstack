
# Voting Pattern Discrepancy Spotter with Full Stack Features (in development)

This project is to add back-end features to my other [project.](https://github.com/DongSooMikeSeo/kingCounty2019Analysis)
That project stopped at just showing the diverging voting patterns on King County Election precincts. My intention was to help organizers to spot those precincts so that they can think about employing more customized marketing schemes.

However, if I added functionalities where they can 1)flag those irregular precincts and 2)leave a message or opinions to themselves, it would be more useful.
Also, if I added a summary graph that shows outliers (diverging precincts), organizers would more easily navigate to those precincts.

With that in my mind, I have been adding a form and a graph on the map while bridging it to the back-end server using PHP.

**See live map in development [here.](https://dongsoomikeseo.github.io/kingcountyvoting_fullstack/)** It is not hosted yet, so fullstack features are not working now.


## What is this project about?
Every election season, we enocunter so many so-called ["Voter Guides"](https://progressivevotersguide.com/washington/2021/general?type=general&year=2021&src=pvg2019general&lang=en). These guides are sent from "umbrella" kind of political organizations. They are packaging their recommendations for every single race and ballot. Is this broad messaging working? What if voters have diverging opinions on seemingly similar progressive issues?  
For example, in 2019, there were Initiative #976 (whether to cut transportation funding) and Referendum Measure No. 88 (restoring Affirmative action or not), in WA state. 
  
![App Screenshot](https://i.ibb.co/0ZSYCBh/Picture123.png)

 This voter guide recommended "No" for Initiative #976 (so don't cut) and "Approed" for Referendum #88 (so restore Affirmative action). However, if a voter has a different set of opinion (maybe "No" for #976 but "Disapproved" for #88), the voter would distrust this guide as a whole.

 This mapping project is to spot election precincts that have this kind of divergence. After spotting these precincts, marketers and organizers will be able to employ more tailored marketing strategies for them.    

**See Jupyter Notebook for data wrangling and Folium Map [here.](https://github.com/DongSooMikeSeo/kingCounty2019Analysis/blob/master/King%20County%202019%20General%20Election.ipynb)**

**See my live web map [here.](https://dongsoomikeseo.github.io/kingCounty2019Analysis/)**
