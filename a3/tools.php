<?php
  session_start();

/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

function get_movies(){

  // Movie 1
  $movie[0]['code']="ACT";
  $movie[0]['name']="The Shawshank Redemption";
  $movie[0]['ratings']=array("R");
  $movie[0]['image']="../../media/shawshank_redemption.jfif";
  $movie[0]['summary']="Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.";
  $movie[0]['timings']=array(['SUN-12PM','disc','a'],['MON-6PM','full','b'],['TUE-6PM','disc','c'],['TUE-12PM','full','d'],['WED-12PM','disc','e'],['WED-6PM','full','f']);
  $movie[0]['actors']=array("'Tim Robbins' as Andy Dufresne","'Morgan Freeman' as Ellis Boyd 'Red' Redding");
  $movie[0]['director']="Frank Darabont (Writer | Producer | Director)";
  $movie[0]['trailer']='https://www.youtube.com/embed/NmzuHjWmXOc';

  $movie[0]['synopsis']=array('In 1947, Andy Dufresne (Tim Robbins), a banker in Maine, is convicted
                              of murdering his wife and her lover, a golf pro. Since the state of
                              Maine has no death penalty, he is given two consecutive life sentences
                              and sent to the notoriously harsh Shawshank Prison. Andy keeps
                              claiming his innocence, but his cold and calculating demeanor leads
                              everyone to believe he did it.'
                              ,
                              " Meanwhile, Ellis Boyd Redding (Morgan Freeman), known as Red is being
                              interviewed for parole after having spent 20 years at Shawshank for
                              murder. Despite his best efforts and behavior, Red's parole is
                              rejected which doesn't phase him all that much. Red is then introduced
                              as the local smuggler who can get inmates anything they want within
                              reason. An alarm goes off alerting all prisoners of new arrivals. Red
                              and his friends bet on whichever new fish will have a nervous break
                              down during his first night in prison. Red places a huge bet on Andy."
                              ,
                              "During the first night, an overweight newly arrived inmate, nicknamed
                              ''fat ass', breaks down and cries hysterically allowing Heywood
                              (William Sadler) to win the bet. However, the celebration is short
                              lived when the chief guard, Byron Hadley (Clancy Brown), savagely
                              beats up the fat man for not keeping quiet when he is asked to.
                              Meanwhile, Andy remains steadfast and composed. The next morning, the
                              inmates learn that ''fat ass'' died in the infirmary because the
                              prison doctor had been out for the night. Andy inquires about the
                              man's name only to get put down by Heywood."
                              ,
                              "About a month later, Andy approaches Red having heard of his talents
                              for finding things. He asks Red to find him a rock hammer, an
                              instrument he claims is necessary for his hobby of rock collecting and
                              sculpting. Red asks a few questions about his intentions which Andy
                              laughs off. Red agrees to place the order and also warns Andy about
                              ''the sisters'', a group of prisoners who sexually assaults other
                              prisoners, most importantly their leader, Boggs (Mark Rolston) who has
                              a crush on Andy. Though other prisoners consider Andy 'a really cold
                              fish,' Red sees something in Andy, and likes him from the start. Red
                              thinks Andy intends to use the hammer to engineer an escape in the
                              future but when he finally sees the tool's actual size, he understands
                              why Andy laughed and laughs too, putting aside the thought that Andy
                              could ever use it to dig his way out of prison."
                              ,
                              "During the first two years of his incarceration, Andy spends most of
                              his time working in the prison laundry or fighting off Boggs and the
                              Sisters. Though he persistently resists and fights them every time,
                              Andy is beaten and raped on a regular basis but keeps quiet about it."
                              ,
                              
                              "Not long afterwards, Brooks snaps and threatens to kill Heywood in
                              order to avoid being paroled. Andy is able to talk him down. When his
                              friends discuss Brooks 'behavior, Red sympathizes with Brooks having
                              obviously become 'institutionalized,' after spending 50 years at
                              Shawshank. He has become essentially conditioned to be a prisoner for
                              the rest of his life and is unable to adapt to the outside world. Red
                              remarks: 'These walls are funny. First you hate 'em, then you get used
                              to 'em. Enough time passes, you get so you depend on them.' Brooks is
                              paroled and goes to live in a halfway house. He is also given a job at
                              a supermarket which he hates. Finding it impossible to adjust to life
                              outside the prison, he eventually commits suicide, leaving the message
                              'Brooks was here' carved on a wooden beam ."
                              ,
                              "In 1965, a young prisoner named Tommy (Gil Bellows) comes to Shawshank
                              to serve time for breaking and entering. Tommy is easy going,
                              charismatic, and popular among the other inmates and is befriended by
                              both Andy and Red. When Tommy explains that he's been going in and out
                              of prison ever since he was 13 years old, Andy suggests that Tommy
                              should consider another line of work besides theft because he seems to
                              be not so good at it. The suggestion really gets to Tommy and he asks
                              Andy to help him work on earning his high school equivalency diploma.
                              Though Tommy is a good student, he is still frustrated when he takes
                              the exam itself, crumpling it up and tossing it in the trash. Andy
                              retrieves it and sends it in anyway. Tommy asks Red about Andy's case
                              which Red explains. Upon hearing the story, Tommy is visibly upset. He
                              then tells Andy and Red the story of a former cellmate of his from
                              another prison who boasted about killing a man who was a pro golfer at
                              the country club he worked at, along with his lover. The woman's
                              husband, a banker, had gone to prison for those murders."
                              ,
                              "When the warden visits Andy in solitary, he tells him that Tommy tried
                              to escape and that Hadley had no choice but to shoot him. Andy doesn't
                              buy that story and tells Norton that ''everything'' stops and that
                              he's not going to work for him anymore. The warden threatens Andy to
                              shut down the library, burn all the books, and move Andy to a much
                              different cell in a much different part of the prison with the most
                              hardened criminals should he stop working for him. He then leaves and
                              orders Andy to another month in solitary to think about things."
                              ,
                              "When Andy finally comes out of solitary, he and Red have a
                              conversation where Andy talks about his wife and how much he loved her
                              and feels responsible for her death even though he didn't pulled the
                              trigger. He then talks about his projects should he ever get out of
                              prison. He talks about Zihuatanejo, retrieve something
                              that was hidden among the stones but refuses to say what it is. Red
                              promises but is worried about his friend's state of mind. His worries
                              are heightened further when he learns that Andy has asked Haywood for
                              a six-foot rope. Red believes Andy may have finally reached his
                              breaking point and is about to commit suicide. Meanwhile, Norton asks
                              Andy to shine his shoes for him and put his suit in for dry-cleaning
                              before retiring for the night. Andy returns to his cell and the guards
                              turn the lights off for the night. Red remarks that it was the longest
                              night of his life."
                              ,
                              "After carving a new message in the wooden beam which reads: 'Brooks
                              was here, so was Red', Red violates parole and leaves the halfway
                              house, unconcerned since no one is likely to do an extensive manhunt
                              for 'an old crook like [him].' Red takes a bus to Fort Hancock, where
                              he crosses into Mexico. The two friends are finally reunited on a
                              beach of the Pacific coast, just like Andy had been hoping for."
                            );


  // Movie 2
  $movie[1]['code']="GFA";
  $movie[1]['name']="The Godfather";
  $movie[1]['ratings']=array("R","TV-14");
  $movie[1]['image']="../../media/godfather.jfif";
  $movie[1]['summary']="The aging patriarch of an organized crime dynasty in postwar New York City transfers control of his clandestine empire to his reluctant youngest son.";
  $movie[1]['timings']=array(['SUN-12PM','disc','a'],['MON-6PM','full','b'],['TUE-6PM','disc','c'],['TUE-12PM','full','d'],['WED-12PM','disc','e'],['THUR-6PM','full','f']);
  $movie[1]['actors']=array("Marlon Brando","Richard S. Castellano");
  $movie[1]['director']="Francis Ford Coppola";
  $movie[1]['trailer']='https://www.youtube.com/embed/sY1S34973zA';

  $movie[1]['synopsis']=array("The Godfather 'Don' Vito Corleone is the head of the Corleone mafia family in New York. He is at the event of his daughter's wedding. Michael, Vito's youngest son and a decorated WW II Marine is also present at the wedding. Michael seems to be uninterested in being a part of the family business. Vito is a powerful man, and is kind to all those who give him respect but is ruthless against those who do not. But when a powerful and treacherous rival wants to sell drugs and needs the Don's influence for the same, Vito refuses to do it. What follows is a clash between Vito's fading old values and the new ways which may cause Michael to do the thing he was most reluctant in doing and wage a mob war against all the other mafia families which could tear the Corleone family apart."
                              ,"Michael, the young and idealistic son of Vito Corleone, the head of the most powerful Mafia clan in New York, returns home as a war hero and is determined to live his own life. But tragic circumstances make him face the legacy of his family.",
                            "The story begins as 'Don' Vito Corleone, the head of a New York Mafia 'family', oversees his daughter's wedding with his wife Carmela. His beloved son Michael has just come home from the war, but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family. Don Vito lives his life in the way of the old country, but times are changing and some don't want to follow the old ways and look out for community and 'family'. An up and coming rival of the Corleone family wants to start selling drugs in New York, and needs the Dons influence to further his plan. The clash of the Don's fading old world values and the new ways will demand a terrible price, especially from Michael, all for the sake of the family.",
                            "Vito Corleone is the aging don (head) of the Corleone Mafia Family. His youngest son Michael has returned from WWII just in time to see the wedding of Connie Corleone (Michael's sister) to Carlo Rizzi. All of Michael's family is involved with the Mafia, but Michael just wants to live a normal life. Drug dealer Virgil Sollozzo is looking for Mafia families to offer him protection in exchange for a profit of the drug money. He approaches Don Corleone about it, but, much against the advice of the Don's lawyer Tom Hagen, the Don is morally against the use of drugs, and turns down the offer. This does not please Sollozzo, who has the Don shot down by some of his hit men. The Don barely survives, which leads his son Michael to begin a violent mob war against Sollozzo and tears the Corleone family apart."
                           ,
                            "Michael, whom the other Mafia families consider a 'civilian' and not involved in mob business, visits his father at a small private hospital after having dinner with Kay at her hotel. He is shocked to find that no one is guarding him -- a nurse tells him that the men were interfering with hospital policy and were told to leave by the police about 10 minutes before Mike's arrival. Realizing that his father is again being set up to be killed, he calls Sonny for help, moves his father to another room, and goes outside to watch the entrance. Michael enlists help from Enzo the baker (Gabriele Torrei), who has come to the hospital to pay his respects. Together, they bluff away Sollozzo's men as they drive by. Police cars soon appear bringing the corrupt Captain McCluskey (Sterling Hayden), who viciously punches Michael in the cheek and breaks his jaw when Michael insinuates that Sollozzo paid McCluskey to set up his father. Just then, Hagen arrives with 'private detectives' licensed to carry guns to protect Don Corleone, and he takes the injured Michael home. Sonny responds by having Bruno Tattaglia (Tony Giorgio), the eldest son and underboss of Don Phillip Tattaglia (Victor Rendina), killed (off-camera).",
                            "Later, a hysterical Connie confronts Michael at the Corleone compound as movers carry away the furniture in preparation for the family move to Nevada. She accuses him of murdering Carlo in retribution for Carlo's brutal treatment of her and for Carlo's suspected involvement in Sonny's murder and that Michael craftily waited until their father died so Vito couldn't stop him. After Connie is removed from the house, Kay questions Michael about Connie's accusation, but he refuses to answer, reminding her to never ask him about his business or what he does for a living. She insists, and Michael outright lies, reassuring his wife that he played no role in Carlo's death. Kay believes him and is relieved. The film ends with Clemenza and new caporegimes Rocco Lampone and Al Neri arriving and paying their respects to Michael. Clemenza kisses Michael's hand and greets him as 'Don Corleone.' As Kay watches, the office door is closed.");


  // Movie 3
  $movie[2]['code']="FAM";
  $movie[2]['name']="The Dark Knight";
  $movie[2]['ratings']=array("PG-13");
  $movie[2]['image']="../../media/dark_knight.jfif";
  $movie[2]['summary']="When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.";
  $movie[2]['timings']=array(['SUN-12PM','disc','a'],['TUE-6PM','disc','b'],['TUE-12PM','full','c'],['WED-12PM','disc','d'],['WED-6PM','full','e']);
  $movie[2]['actors']=array("Christian Bale","	Heath Ledger");
  $movie[2]['director']="Christopher Nolan";
  $movie[2]['trailer']='https://www.youtube.com/embed/EXeTwQWrcwY';

  $movie[2]['synopsis']=array("The movie begins with a gang of men with clown masks breaking into the bank where the mob has a large portion of their money stashed. It begins with five clowns, each getting a cut of the spoils. They suggest that a sixth member of the gang - nicknamed 'The Joker' - who did the planning, but sat out the robbery, doesn't deserve a cut. As the robbery goes on, the clowns begin to kill each other in order to get a larger cut, until a school bus crashes through the wall of the bank, killing another clown. A mob bank manager, who was himself shot with an automatic weapon after he tried to take out the clowns with a shotgun, tells the remaining clown that he doesn't know who he is dealing with. The clown kneels down and tells the banker, 'I believe whatever doesn't kill you simply makes you...stranger...' then removes his mask to reveal that he himself is The Joker. Joker puts a grenade into the banker's mouth and boards the bus, leaving a cord attached to the pin. The bus pulls out with all of the bank's cash and the pin pops out. It is just a gas grenade. The Joker joins a long line of school buses leaving the scene as the police arrive.",
                                "Meanwhile, in a parking garage, the Scarecrow, still at-large after escaping Arkham Asylum, is negotiating with the Russian mob members, led by The Chechen, over the sale of some of his fear-inducing drugs. The sale is interrupted when some of Gotham's citizens dressed as Batmen wanna-be's begin shooting at the men. As he gases one of the fake Batmen with his mind-altering drugs from his cuff, the Scarecrow notes that they are not the real Batman, because Batman would never use a gun. Suddenly the Batmobile/Tumbler crashes through a barricade and Scarecrow notes, 'That's more like it!' The Batmobile, pre-programmed to 'LOITER' and then 'INTIMIDATE', fires rockets into a nearby office, sending the remaining mobsters running. The real Batman arrives on the scene and bends the rifle barrel of one of the wanna-be Batmen before knocking him out."
                              ,"The Chechen sends his rottweilers to attack the Batmen, and as Batman saves them he takes the dogs out after being badly bitten in the arm. The Scarecrow attempts to flee in a white van but Batman jumps onto the van and begins cutting into the side with his device called the mangler. Scarecrow swerves into a support which sends Batman to the ground. As Scarecrow gets away down a spiraling passageway, Batman leaps onto the roof of his van, smashing it to a halt. He leaves the fake Batmen and the Scarecrow along with some of the mobsters tied up together for the police to eventually round up. When one of the impostors says he's trying to help, Batman harshly tells him he doesn't need any help."
                              ,"Dent meets Lt. Gordon, and after a short exchange of words, they both express their distrust for those that are working in each other's offices. Harvey interrogates Gordon over his involvement with the Batman and Harvey tells him he wants to meet him. Gordon requests search warrants for five banks that are believed to be holding the remainder of the mobs money. Dent agrees to back Gordon's search warrants, forming a tenuous trust with the honest Gordon, who in turn hails Dent as Gotham's 'White Knight' while Dent questions Gordon about another nickname they had for him when he was at I.A.D., a nickname Gordon claims to have no knowledge of.",
                              "The Joker suddenly enters in the room, and after killing a hostile mob member's crony by way of a 'magic trick', sits down and talks with the mob about how pathetic they've become since Batman came around. He tells them their one solution is to 'Kill the Batman', and offers to do so for half the mob's money. He warns them about Lau, saying he knows a 'squealer when he sees one', prompting Lau to turn off his monitor. The mob laughs, and as one of the mobsters, Gambol, rises from his seat and threatens the Joker, the Joker opens his coat, exposing grenades. Gambol tells the Joker that he's putting a price out on his head. The Joker tells the mob that when they plan to take things a little more seriously, give him a call, and presents them with 'his card', a joker playing card. And with that, he exits. But not before warning that Batman will come for Lau."
                             ,"While transporting Harvey, the Joker and some goons start taking out the police cars in a large semi truck. He pulls out an RPG and begins firing at the armored truck carrying Dent. The Tumbler arrives and attempts to stop the Joker, and is hit by one of the Joker's RPGs. His car takes 'catastrophic' damage, and he's forced to eject. However, the ejection in this car is a bike, the Batpod, that deploys out the front of the car. Batman chases down the Joker on his Batpod, and after firing some cables at the truck and weaving them through some light poles and buildings, flips the truck completely over. The Joker emerges with a Smith & Wesson M76 Submachine gun and shoots at Batman, who speeds towards him on his Batpod, all the while screaming at Batman to hit him. Batman honors his own non-lethal code and swerves around the Joker then crashes into the flipped truck, falling to the ground. As the Joker jumps on him with a knife, one of the SWAT officers holds a shotgun to the back of his head, and upon removing his helmet and mask, shows that it was Lt. Gordon, who faked his death to protect his family. The Joker is hauled away to the MCU. Harvey gets out of the truck and into a cruiser, stating he is off to see a worried girlfriend."
                              ,"Wayne's accountant Reese appears on a news show claiming to be able to tell the world who Batman is. He tells Gotham that he is going to reveal Batman's identity, but before he can, the Joker calls in to the show saying that he doesn't want this lawyer to ruin his fun. He says that if the lawyer is not killed within 60 minutes, he is going to blow up a hospital. This triggers the police to rush in and protect the lawyer, and try to carry him to safety. At the same time, other police are evacuating all of the hospitals in Gotham City. When they get to Gotham General, a police officer attempts to evacuate a nurse in Harvey Dent's room, which then turns out to be the Joker, and he kills the cop. He then explains to Two-Face how he needs to introduce a little anarchy and chaos, how easy it is to bring down all the good people in the world and how it's all fair. Joker unties Two-Face and hands him a pistol. Two-Face, bent on revenge and now believing everything in the world should be decided by chance, flips the double-headed coin to decide whether or not to shoot Joker which Joker agrees is only fair. Though we don't see it, the coin obviously lands on the clean side since the next scene shows Joker leaving Gotham General Hospital as it blows up in the background."
                              ,"We see a montage of Commissioner Gordon and other members of the Gotham City Police Department gathered at a memorial to Harvey Dent. It is unclear whether he was killed or not. Gordon then smashes the Bat Signal above the MCU Building, while Alfred burns Rachel's note and Lucius shuts down the sonar machine with a pleased look. Batman, in the background, continues to explain that by taking the blame of the killings, the faith that the people of Gotham had in Harvey Dent can be rewarded, and they can feel justified.");


  // Movie 4
  $movie[3]['code']="AHF";
  $movie[3]['name']="The lord of the rings";
  $movie[3]['ratings']=array("PG-13");
  $movie[3]['image']="../../media/lord_of_the_rings.jfif";
  $movie[3]['summary']=" A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.";
  $movie[3]['timings']=array(['SUN-12PM','disc','a'],['MON-6PM','full','b'],['TUE-6PM','disc','c'],['TUE-12PM','full','d'],['WED-12PM','disc','e'],['WED-6PM','full','f']);
  $movie[3]['actors']=array("Alan Howard","Viggo Mortensen");
  $movie[3]['director']="Peter Jackson";
  $movie[3]['trailer']='https://www.youtube.com/embed/Tl44vcVIRmQ';

  $movie[3]['synopsis']=array(
                    "The prologue, spoken by Galadriel, shows the Dark Lord Sauron forging the One Ring which he can use to conquer the lands of Middle-earth through his enslavement of the bearers of the Rings of Power powerful magical rings given to individuals from the races of Elves, Dwarves and Men. A Last Alliance of Elves and Men is formed to counter Sauron and his forces at the foot of Mount Doom, but Sauron himself appears to kill Elendil, the High King of Arnor and Gondor, and Gil-galad, High King of the Noldor. After Elendil falls his son, Isildur, grabs the hilt of his father's broken sword Narsil, and slashes at Sauron's hand. The stroke cuts off Sauron's fingers, separating him from the Ring and vanquishing his army. However, because Sauron's life is bound in the Ring, he is not completely defeated until the Ring itself is destroyed. Isildur takes the Ring and succumbs to its temptation, refusing to destroy it, but he is later ambushed and killed by orcs and the Ring is lost in the River Anduin, into which Isildur fell.
                    ",
                    "The Ring is found 2,500 years later, and eventually it comes to the creature Gollum, who takes it underground for five centuries, giving Gollum 'unnaturally long life.' The Ring leaves him however, and is found by the hobbit Bilbo Baggins, much to the grief of Gollum, who called it his 'precious'. Bilbo returns to his home in the Shire with the Ring, and the story jumps forward in time sixty years. At his 111th birthday, Bilbo leaves the Ring to his nephew and adopted heir Frodo Baggins. The Wizard Gandalf soon learns it is the One Ring, and sends him to Bree with Sam, with plans to meet him there after Gandalf goes to Isengard to meet the head of his order, Saruman. Saruman reveals that the Nazgûl, or Ringwraiths, have left Mordor to capture the Ring and kill whoever carries it; having already turned to Sauron's cause, he then imprisons Gandalf atop Orthanc. Gandalf sees Saruman's ultimate plan; he has begun to destroy the forest surrounding Isengard for fuel to forge weapons for an army of large orcs, the Uruk-hai."
                    ,
                  "In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, still it remained lost to him. After many ages it fell, by chance, into the hands of the Hobbit, Bilbo Baggins. On his eleventy-first birthday, Bilbo disappeared, bequeathing to his young nephew, Frodo, the Ruling Ring, and a perilous quest: to journey across Middle-earth, deep into the shadow of the Dark Lord and destroy the Ring by casting it into the Cracks of Doom."
                 ,
                  "Frodo and Sam are soon joined by fellow hobbits Merry and Pippin. After encountering and eluding a Ringwraith on the road, they manage to reach Bree, and there they meet a man called Strider, who agrees to lead them to Rivendell and helps them elude the Ringwraiths again. The hobbits agree because Gandalf isn't there to guide them. After some travelling, they spend the night on the hill of Weathertop, where they are attacked by the Nazgûl. Strider battles the spectres and fights them off, but Frodo is grievously wounded with a Morgul blade, and they must quickly get him to Rivendell for healing. While chased by the Nazgûl, Frodo is taken by the elf Arwen to the elvish haven of Rivendell, and healed by her father, Elrond."
                ,"In Rivendell Frodo meets Gandalf, who explains why he didn't meet them at Bree as planned -- while imprisoned atop Orthanc, he was able to escape with the aide of Gwaihir, a giant eagle. In the meantime, there are many meetings between various peoples, and Elrond calls a council to decide what should be done with the Ring. The Ring can only be destroyed by throwing it into the fires (that is, lava) of Mount Doom, where it was forged. Mount Doom is located in Mordor, near Sauron's fortress of Barad-dûr, and will be an incredibly dangerous journey. Frodo volunteers to take the Ring to Mount Doom as all the others argue about who should or shouldn't take it. He is accompanied by his hobbit friends and Gandalf, as well as Strider, who is revealed to be Aragorn, the rightful heir to the throne of Gondor. Also travelling with them are the Elf Legolas, the Dwarf Gimli and Boromir, the son of the Steward of Gondor. Together they comprise the Fellowship of the Ring. The Fellowship set out and try to pass the mountain Caradhras, but they are stopped by Saruman, who uses his wizardry to create an avalanche. They are forced to travel under the mountain through the Mines of Moria. After journeying partway through the Mines, Pippin accidentally gives away their presence to a band of orcs. The Fellowship encounter a Balrog, an ancient demon of fire and shadow, at the Bridge of Khazad-dûm. Gandalf confronts the Balrog on the bridge, allowing the others to escape the mines, while he falls with the creature into the abyss below."
                ,"The group flees to the elvish realm of Lothlórien, where they are sheltered by its rulers, Galadriel and her husband Celeborn. Galadriel is tested when she tries to convince Frodo to give the ring to her but she regains her senses and bids him to protect the ring until it can be destroyed. After resting, the band decide to travel on the River Anduin towards Parth Galen. Before they leave, Galadriel gives Frodo the Phial of Galadriel, a light source. After landing at Parth Galen, Boromir, affected by the ring's power, tries to take the Ring from Frodo, who manages to escape by putting the Ring on his finger and vanishing. Knowing that the Ring's temptation will be too strong for the Fellowship, Frodo decides to leave them and go to Mordor alone. Meanwhile, the rest of the Fellowship are attacked by Uruk-hai, larger and stronger orcs bred by Saruman that can withstand sunlight. Merry and Pippin, realizing that Frodo is leaving, distract the orcs, allowing Frodo to escape. Boromir rushes to the aid of the two hobbits but is mortally wounded by the orc commander Lurtz, and Merry and Pippin are captured. Aragorn, Legolas, and Gimli find Boromir, who regrets attempting to steal the Ring and dies. They decide to pursue the orcs and rescue the hobbits, leaving Frodo to his fate. Sam joins Frodo before he leaves, and together the two head to Mordor.");

  return $movie;
}

$movies = get_movies();

function receipt($booking_info){
  $_SESSION['booking_info'] = array();
  array_push($_SESSION['booking_info'],$booking_info);

  $print = array(
    array('____________________________________________________________________________________________________________________________________'),
    array(),
    array("Order date", "Name", "Email", "Mobile", "Movie Code", "Day of Movie", "Time of Movie"),
    array(date("Y/m/d"),$booking_info["user"]["name"],$booking_info["user"]["email"],$booking_info["user"]["mobile"],$booking_info["movie"],$booking_info["day"],$booking_info["time"]),
    array('____________________________________________________________________________________________________________________________________'),
    array(),
    array('#STA','$STA','#STP','$STP','#STC','$STC','#FCA','$FCA','#FCP','$FCP','#FCC','$FCC',"Total","GST"),
    array($booking_info['seats']['sta']['qty'],"$".$booking_info['seats']['sta']['total'],$booking_info['seats']['stp']['qty'],"$".$booking_info['seats']['stp']['total'],$booking_info['seats']['stc']['qty'],"$".$booking_info['seats']['stc']['total'],$booking_info['seats']['fca']['qty'],"$".$booking_info['seats']['fca']['total'],$booking_info['seats']['fcp']['qty'],"$".$booking_info['seats']['fcp']['total'],$booking_info['seats']['fcc']['qty'],"$".$booking_info['seats']['fcc']['total'],"$".$booking_info['total'],"$...."),
    array('===================================================================================================================================='),
    array(),
    array(),
  );  

  $export = fopen("bookings.txt", "a");

  foreach ($print as $row) {
    fputcsv($export, $row, "\t");
  }
  fclose($export);
  header("Location: ./invoice.php");
}
