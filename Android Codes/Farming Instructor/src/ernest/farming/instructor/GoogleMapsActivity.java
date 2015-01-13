package ernest.farming.instructor;

import java.util.ArrayList;
import java.util.List;

import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Point;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.maps.GeoPoint;
import com.google.android.maps.MapActivity;
import com.google.android.maps.MapController;
import com.google.android.maps.MapView;
import com.google.android.maps.Overlay;

public class GoogleMapsActivity extends MapActivity implements LocationListener {
	private MapView mapView;
    private LocationManager locManager;
    TextView showresult;
    double a, b;
    GeoPoint point;
    Button buttonShow;
    Spinner spinner1;
    Button buttonBack;
    Button buttonExit;
   
    
    
    
    //location profiles
    String Kampala = "Town Name: Kampala" + "\n" +
   "Coordinates: 0.3167° N, 32.5833° E" + "\n" +
   "Total Area: 189 km² (73 sq mi)" + "\n" +
   "\t"+ "-Land: 	176 km² (68 sq mi)" + "\n" +
   "\t"+ "-Water: 	13 km² (5 sq mi)" + "\n" +
   "Elevation: 1,190 m (3,900 ft)" + "\n" +
   "Density 	9,429.6/km² (24,423/sq mi)" + "\n" +
   "Climate: Tropical wet and dry climate" + "\n" +
   "altitude: the city has higher altitudes" + "\n" +
   "Temperature: average temperatures are noticeably cooler than what is typically seen in other cities with this type of climate" + "\n" +
   "Kampala seldom gets very hot during the year; the warmest month is January. Another facet of Kampala’s weather is that it features two annual wet seasons. There is a long rainy season from August through December and a short rainy season from February through June. However, the shorter rainy season sees substantially heavier rainfall per month, with April typically seeing the heaviest amount of precipitation at an average of around 175 mm of rain." + "\n" +
   "Economic Activities: Due to it's good weather, Kampala is a favarouble place for Food Crops cultivation, Livestock keeping and Fishing";

    String Gulu = "Town Name: Gulu" + "\n" +
    		"Coordinates: 2.7667° N, 32.3000° E" + "\n" +
    		"Area: 3,449.08 sq km" + "\n" +
    		"Elevation: 1,100 m (3,600 ft)" + "\n" +
    		"Production & Marketing: The major crop grown are millet, sorghum, maize, upland rice, cassava, sweet potatoes, pigeon, peas, sesame, groundnuts, sunflower, Soya bean, cotton and tobacco, rice and groundnuts are new cash crops after the traditional cotton and tobacco. Recently, coffee has been introduced in the district as a cash crop." + "\n" +
    		"Livestock production is beginning to pick up. Fish farming, bee keeping are recent enterprises that are also picking up very well in the district. The numerous rivers and swamps provide Good Avenue for fisheries, horticultural and irrigation development." + "\n" +
    		"The people of Gulu practice integrated farming system comprising of crop, livestock, aquaculture and bee keeping." + "\n" +
"Average weather in Gulu:" + "\n" +
    "\t"+ "-temperatures are always high." + "\n" +
    "\t"+ "-Most rainfall is seen in April, May, June, July, August, September and October."+ "\n" +
    "\t"+ "-the warmest month is February." + "\n" +
    "\t"+ "-the coolest month is August." + "\n" +
    "\t"+ "-August is the wettest month." + "\n" +
    "\t"+ "-January is the driest month.";
  
    String Kira = "Town Name: Kira" + "\n" +
    		"Coordinates: 0.39722°N, 32.63889°E" + "\n" +
    		"Area: 38.16 sq mi (98.83 km2)" + "\n" +
    		"Elevation 	3,900 ft (1,190 m)" + "\n" +
    		"Density 	4,712/sq mi (1,819.3/km2)" + "\n" +
    		"Economic activities: Many women in the town engage in such activities as hair care, road-side groceries, market vending, restaurants, and health care clinics. Men are mainly engaged in wholesale and retail merchandising, taxi driving and boda boda (motorcycle and bicycle) for-hire transportation. Increasingly, residents of Kira Town are employed in salaried and non-salaried positions in the city of Kampala and return to Kira in the evenings to sleep." + "\n" +
    		"Production: Crops grown include yams, sugar cane, bananas, potatoes, maize and vegetables such as beans, tomatoes and cabbages.";
    
    String Lira = "Town Name: Lira" + "\n" +
    		"Coordinates: 2.2333° N, 32.7000° E" + "\n" +
    		"Total Area: 1,326 km2 (512 sq mi)" + "\n" +
    		"\t"+ "-Land, 1,286 km2 (497 sq mi)" + "\n" +
    		"\t"+ "-Water, 40 km2 (20 sq mi)" + "\n" + 
    		"Elevation, 1,080 m (3,540 ft)"+ "\n" +
    		"Production: Major crops grown include beans, maize, millet cassava, simsim and sorghum and are grown for both food and cash crops." + "\n" +
    		"\t"+"-Average weather in Lira:" + "\n" +
    		"\t"+"-Annual average high temperature: 30.0 °C" + "\n" +
    		"\t"+"-Annual average low temperature: 16.4 °C" + "\n" +
    		"\t"+"-Average temperature: 23.2 °C" + "\n" +
    		"\t"+"-Average annual precipitation: 1429 mm";
    
    String Mbale = "Town Name: Mbale" + "\n" +
    		"Coordinates: 1.0167° N, 34.1833° E" + "\n" +
    		"Total area: 2,467 km2 (953 sq mi)." + "\n" +
    		"Population Density, 166.3/km2 (431/sq mi)" + "\n" +
    		"Elevation: 3,740 ft (1,140 m)" + "\n" +
    		"Main economic activities: Farming and trade" + "\n" +
    		"Production: leading crops grown in Mbale District and that is; Coffee, Matooke, Maize, Irish Potatoes, Vegetables like Beans, Cabbages, Tomatoes, Onions and Egg plants." + "\n" +
    		"Average weather in Mbale:" + "\n" +
    		"Mbale District has got the most moderate temperatures in Uganda which stand at an average of 27 degrees celicious. The climate is both warm and cold. The rain season which is twice a year is generally cold while the warm season has some high temperatures but not very hot. The Topography of Mbale District is generally Hilly with tree cover and water streams which flow downwards from Mt. Elgon.";
    
    String Nansana = "Town Name: Nansana" + "\n" +
    		"Coordinates: 0.3700° N, 32.5250° E" + "\n" +
    		"Total area: 2,704 km2 (1,044 sq mi)";
   
    String Jinja = "Town Name: Jinja" + "\n" +
    		"Coordinates: 0.7333° N, 33.3333° E" + "\n" +
    		"Elevation 	1,200 m (3,900 ft)" + "\n" +
    		"Production: The primary activity is agriculture with a focus on food crops such as beans, groundnuts, sorghum, millet, cassava, and sweet potatoes. Coffee and cotton are the main cash crops. Fruits and vegetables grown in the district include tomatoes, onions and cabbage." + "\n" +
    		"Average weather in Jinja:" + "\n" +
    		"\t" + "-Temperature 22 °C" + "\n" +
    		"\t" + "-Precipitation 	44.9" + "\n" +
    		"\t" + "-Number of Rainy Days 78.8" + "\n" +
    		"\t" + "-Other facts: fertile soils, abundant water sources, and reliable rainfall.";
    
    String Mbarara = "Town Name: Mbarara" + "\n" +
    		"Nickname: Land of Milk." + "\n" +
    		"Coordinates: 0.6500° S, 30.6833° E" + "\n" +
    		"Area: Total, 1,846.4 km2 (712.9 sq mi)." + "\n" +
    		"Elevation: 1,800 m (5,900 ft)." + "\n" +
    		"Population Density: 247.9/km2" + "\n" +
    		"Main Economic activity: Livestock keeping (Mbarara has the largest number of milk processing plants in Uganda)" + "\n" +
    		"Production:" + "\n" +
    		"Crops grown include: Matooke, Sweet Bananas, Beans, Sweet Potatoes, Irish Potatoes, Millet, Cabbage, Tomatoes, Pineapples, Avocado, Passionfruit, Papaya,Mangoes The livestock raised in the district includes: Ankole cattle, Exotic cattle, Hybrid cattle, Goats, Sheep, Pigs, Rabbits, Chicken, Ducks, Guineafowl, Turkeys" + "\n" +
    		"Average weather in Mbarara:" + "\n" +
    		"\t" + "-temperatures are always high." + "\n" +
    		"\t" + "-rainy season is seen in March, April, October and November."+ "\n" +
    		"\t" + "-Mbarara has dry periods in June and July."+ "\n" +
    		"\t" + "-On average, the warmest month is February." + "\n" +
    		"\t" + "-On average, the coolest month is May." + "\n" +
    		"\t" + "-April is the wettest month." + "\n" +
    		"\t" + "-July is the driest month.";
   
    String Entebbe = "Town Name: Entebbe" + "\n" +
    		"Coordinates: 0.0667° N, 32.4500° E" + "\n" +
    		"total area: 56.2 square kilometres (21.7 sq mi)" + "\n" +
    		"\t" + "20 square kilometres (7.7 sq mi) is water."+ "\n" +
    		"Elevation 	3,870 ft (1,180 m)" + "\n" +
    		"Entebbe Climate:" + "\n" +
    		"Entebbe features a tropical rainforest climate with relatively constant temperatures throughout the course of the year. Entebbe has noticeably wetter and drier months, with January being the city's driest month and a noticeably drier stretch from July through September. However, since average monthly precipitation in each of these months is above 60 mm, Entebbe has no true dry season and therefore falls under the tropical rainforest climate category. Entebbe's wettest months are April and May, when, on average, roughly 250 mm of rain falls in each of these months. Entebbe's average annual temperature is approximately 21 degrees Celsius."+ "\n" +
    		"Fact about the place: condusive area for Botanic Gardens";
    
    String Kasese = "Town Name: Kasese" + "\n" + 
    		"Coordinates: 0.1833° N, 30.0833° E" + "\n" +
    		"Area: The district has a total land area of 2,724 square kilometres (1,052 sq mi), of which 885 square kilometres (342 sq mi) is reserved for Queen Elizabeth National Park and 652 square kilometres (252 sq mi) for Rwenzori Mountains National Park, leaving 1,187 square kilometres (458 sq mi) for human habitation and economic utilization." + "\n" +
    		"Population Density: 547.1/km2 (1,417/sq mi)" + "\n" +
    		"Economic activities: Kasese district is mainly agricultural with over 85 percent of the people being peasant farmers who depend on subsistence farming for their livelihood. It has two rainy seasons that come between March to May and August to November. Temperatures normally range between 23°C and 30°C. Crops grown include: Millet, Cassava, Maize, Sorghum, Groundnuts, Beans, Irish Potatoes, Sweet potatoes, Matooke, Passion fruit, Tomatoes, Cabbage, Cotton, Coffee, Chili peppers, Mangoes, Pineapples, Pears, Apples." + "\n" +
    		"Most of the agricultural produce is either sold locally or transported for sale in Kampala and to other cities and towns in Uganda. Fish farming is slowly taking root in the district and demand for the fish is high both locally and in neighboring countries. Livestock kept in the district includes: Cattle, goats, pigs and poultry." + "\n" +
    		"Fishing also occurs on Lake George and on smaller crater lakes in the district. There are two main landing sites on the shores of Lake George, Mahyoro and Kayinja.";
    
    String Masaka = "Town Name: Masaka" + "\n" +
    		"Coordinates: 0.3167° S, 31.7167° E" + "\n" +
    		"Area: Masaka district covers an area of about 4560 sq km of which 30% are open water and swamps." + "\n" +
    		"Elevation: 3,900 ft (1,200 m)" + "\n" +
    		"Economic activities: Most of the people are farmers with both cattle and other crops. Masaka used to be the highest producer of the indigenous banana food (locally referred to as Matooke). Other economic activities include: Meat & Fish Processing, Production of Beverages, Furniture Manufacturing, Manufacture of Footwear, Manufacture of Baked Products, Glass Manufacturing" + "\n" +
    		"One of the economic activities in Masaka is 'gathering grasshoppers' that can potentian earn a collector over US 20,000(UGX:50 million) annually. (US$1 = UGX:2,500)";
    
    String Soroti = "Town Name: Soroti" + "\n" +
    		"Coordinates: 1.6833° N, 33.6167° E" + "\n" +
    		"Economic activity: Agriculture is the main economic activity in the district. Crops grown include Millet, Cassava, Peas, Potatoes, Beans, Onions, Tomatoes, Cabbage, Simsim, Sunflower, Cotton. The produce is consumed locally and some is sold in the urban areas, particularly in Soroti Town.";
    
    String Njeru = "Town Name: Njeru" + "\n" +
    		"Coordinates: 0.41861°N, 33.17083°E" + "\n" +
    		"Economic Activity: There are several industries and businesses located in Njeru that provide employment to a significant number of people and contribute significantly to the economy of Uganda."+ "\n" +
    		"These include but are not limited to:" + "\n" +
    		"Nile Breweries Limited - A subsidiary of South African Breweries" + "\n" +
    		"Nalubaale Power Station - Installed Capacity 180 MW - Operated by Eskom (Uganda), a subsidiary of Eskom" + "\n" +
    		"East African Packaging Solutions - A 50/50 Joint Venture between the Madhvani Group and Graphic Systems Limited." + "\n" +
    		"NYTIL Picfare - The Biggest Garments Factory in Uganda, making garments out of Locally grown Organic Cotton." + "\n" +
    		"Nile Vocational Institute - A Technical College with over 100 Students founded by German Charity Kindernothilfe" + "\n" +
    		"Vitafoam Industries - A Factory Manufacturing Mattresses." + "\n" +
    		"Njeru Stock Farm - Formerly a government Livestock Farm, now Used as an Army Detach.";
   
    String Kitgum = "Town Name: Kitgum" + "\n" +
    		"Coordinates: 3.5000° N, 33.0000° E" + "\n" +
    		"Economic activities: Agriculture is the main economic activity in the district. Crops grown include. Cereals (Millet, Sorghum) Legumes (Beans, Groundnuts) Root crops(Cassava, Potatos) Others (Peas, Simsim, Sunflower, Cotton, Tobacco, Sugarcane, Cabbage, Tomatoes). Cattle ranching is practiced in some areas, although not widely.";
    
    String Arua = "Town Name: Arua" + "\n" +
    		"Coordinates: 3.0242° N, 30.9114° E" + "\n" +
    		"Economic activities: Agriculture is the backbomne of Arua District's economy. Crops raised include (Groundnuts, Beans, Maize, Millet, Simsim, Mangoes, Avocado, Cassava, Matooke, Flowers, Tobacco)" + "\n" +
    		"In addition to crops, the following fauna is reared for food at home and for sale in the towns: (African goats, Boer goats, Hybrid goats, Chicken - both for eggs and meat, Fish farming, Pigs, Bee keeping)";
   
    String Mukono = "Town Name: Mukono" + "\n" +
    		"Coordinates: 0.2500° N, 32.9167° E" + "\n" +
    		"Facts about the area: The district is blessed with a favorable climate, abundant rainfall, rich flora/fauna and proximity to urban areas.";
    
    String Iganga = "Town Name: Iganga" + "\n" +
    		"Coordinates: 0.7500° N, 33.5833° E" + "\n" +
    		"Economic activities: Iganga District is primarily a rural district, and the chief town is not yet a tourist destination, as is Jinja 44 kilometres (27 mi) to the west. The majority of people in Iganga District are subsistence farmers. The surplus produce finds ready market locally in the urban areas and in neighboring area markets. The main crops grown in the district include: (Maize, Potatoes, Sugar cane- There many sugar cane out growers in Iganga district supplying Kakira Sugar factory in the nearby district of Jinja, Coffee, Soya beans, Mangos, Papaya, Pineapples, Tomatoes, Sweet bananas, Matooke, Peppers, Cabbage, Green vegetables)";
    
    String Koboko = "Town Name: Koboko" + "\n" +
    		"Coordinates: 3.4167° N, 30.9667° E" + "\n" +
    		"Economic activities: Like in most Ugandan districts, subsistence agriculture and animal husbandry are the main economic activities in the district. The crops grown include (Maize, Millet, Sweet potatoes, Cassava)" + "\n" +
    		"Livestock raised in the district includes cattle, goats, sheep and poultry.";

    String Busia = "Town Name: Busia" + "\n" + 
    		"Coordinates: 0.5000° N, 34.0000° E" + "\n" +
    		"Economic activity: The town, together with its sister city Busia, Kenya across the border, are busy commercial centers with heavy commercial traffic in both directions. Goods from Uganda include cash crops like coffee, cotton and timber destined for the Kenyan port of Mombasa for export. Foodstuffs like fish, bananas, pineapples and mangoes, maize, beans, groundnuts, sorghum destined for the Kenyan market also come across. In the opposite direction, Uganda imports petroleum products, manufactured goods and household items like cooking oil, soap, clothing, electronics and automobiles.";
    
    String FortPortal = "Town Name: Fort Portal" + "\n" +
    		"Found in: Kabarole District" + "\n" +
    		"Coordinates: 0.7000° N, 30.2667° E" + "\n" +
    		"Economic activities: Subsistence agriculture and animal husbandry are the main economic activities in Kabarole District." + "\n" +
    		"The crops grown in Kabarole District include (Soybeans, Onions, Cassava, Bananas, Matooke, Maize, Beans, Sorghum, Potatoes, Sweet potatoes, Groundnuts, Millet, Yams, Coffee, Tea, Pineapples, Tomatoes, Cabbage)";
    
    String Kabale = "Town Name: Kabale" + "\n" +
    		"Coordinates: 1.2500° S, 29.9900° E" + "\n" +
    		"Economic activities: food crops, fruits (apples) and few cash crops (tea)";
    
    String Masindi = "Town Name: Masindi" + "\n" +
    		"Coordinates: 1.6667° N, 31.7167° E" + "\n" +
    		"Economic activities: Agriculture is the main economic activity in the district. Crops grown include (Millet, Sorghum, Sunflower, Simsim, Sweet potatos, Irish potatos, Cassava, Maize, Cotton, Coffee, Tobacco, Cabbage, Tomatos, Onions, Soybeans, Peas, Bananas)" + "\n" +
    		"Fishing is practiced in the rivers and on Lake Albert. Fish farming is an important economic activity with over 250 ponds in the district. Bee keeping for honey production is an increasing practice in the district. Tourism is also increasing with a steady stream of visitors to Murchison Falls National Park (formerly Kabalega Falls National Park)." + "\n" +
    		"73.1% of the population in the district are engaged in smallholder agricultural activities. About 6.2% of the total farmland is under large scale commercial farming. The district is the leading producer of maize in the region. In Uganda, only Iganga District and Kapchorwa District produce more maize than Masindi District";
    
    String Tororo = "Town Name: Tororo" + "\n" +
    		"Coordinates: 0.6833° N, 34.1833° E" + "\n" +
    		"Economic activities: Agriculture is the backbone of the district economy. Crops grown include (Millet, Cassava, Peas, Beans, Sweet potatoes, Simsim, Sunflower, Cotton, Onions, Rice)" + "\n" +
    		"Most of the district produce is consumed locally or sold in the urban areas within the district.";
    
    String Hoima = "Town Name: Hoima" + "\n" +
    		"Coordinates: 1.4167° N, 31.0833° E" + "\n" +
    		"Economic activity: Agriculture with emphasis on food crops is the backbone of the district economy. Crops grown include (Sorghum, Maize, Millet, Peas, Groundnuts, Sunflowers, Sweet potatoes, Beans, Cotton, Tea, Coffee, Tomatoes, Cabbage, Onions, Tobacco)" + "\n" +
    		"Fishing on Lake Albert employs several hundred people. The recent discovery of petroleum in the district is increasingly attracting people from the district in the many activities that the industry entails.";

    String Mityana = "Town Name: Mityana" + "\n" +
    		"Coordinates: 0.4500° N, 32.0500° E" + "\n" +
    		"Economic Activity: Agriculture is the main income-earning activity in the district. Like Mubende District, from which Mityana District was split, the crops grown include (Sweet potatoes, Beans, Cassava, Maize, Bananas, Groundnuts, Onions, Cabbage, Tomatoes)" + "\n" +
    		"Cash crops grown in the district include (Coffee, Tea)" + "\n" +
    		"There are several large-scale tea estates in the district, including Namutamba Tea Estate, located at Namutamba, and Mwera Tea Estate, located at Mwera and a member of the Madhvani Group.";
    String value = "";
    class MapOverlay extends com.google.android.maps.Overlay
    {
        @Override
        public boolean draw(Canvas canvas, MapView mapView, 
        boolean shadow, long when) 
        {
            super.draw(canvas, mapView, shadow);                   
 
            //---translate the GeoPoint to screen pixels---
            Point screenPts = new Point();
            mapView.getProjection().toPixels(point, screenPts);
 
            //---add the marker---
            Bitmap bmp = BitmapFactory.decodeResource(
                getResources(), R.drawable.marker);            
            canvas.drawBitmap(bmp, screenPts.x, screenPts.y-50, null);         
            return true;
        }
    } 


 @Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MainActivity.class);
 						startActivity(i);
 						finish();
 	               }
 	           })
 	           .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
           public void onClick(DialogInterface dialog, int id) {
                dialog.cancel();
           }
       });
 	    AlertDialog alert = builder.create();
 	    alert.show();

 	}

    @Override
    public void onCreate(Bundle savedInstanceState) {
    	 super.onCreate(savedInstanceState);
         setContentView(R.layout.map_current_location);
         
         addItemsOnSpinner1();
     	addListenerOnButton();
     	addListenerOnSpinnerItemSelection();
     	}
     	
     	
     // add items into spinner dynamically
     	  public void addItemsOnSpinner1() {
     	 
     		spinner1 = (Spinner) findViewById(R.id.spinner1);
     		List<String> list = new ArrayList<String>();
     		list.add(" ");
     		list.add("Kampala");
     		list.add("Gulu");
     		list.add("Kira");
     		list.add("Lira");
     		list.add("Mbale");
     		list.add("Nansana");
     		list.add("Jinja");
     		list.add("Mbarara");
     		list.add("Entebbe");
     		list.add("Kasese");
     		list.add("Masaka");
     		list.add("Soroti");
     		list.add("Njeru");
     		list.add("Kitgum");
     		list.add("Arua");
     		list.add("Mukono");
     		list.add("Iganga");
     		list.add("Koboko");
     		list.add("Busia");
     		list.add("Fort Portal");
     		list.add("Kabale");
     		list.add("Masindi");
     		list.add("Tororo");
     		list.add("Hoima");
     		list.add("Mityana");
     		ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(this,
     			android.R.layout.simple_spinner_item, list);
     		dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
     		spinner1.setAdapter(dataAdapter);
     	  }
     	 
     	  public void addListenerOnSpinnerItemSelection() {
     		spinner1.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
     	  }
     	 
     	  // get the selected dropdown list value
     	  public void addListenerOnButton() {
     	 
     		spinner1 = (Spinner) findViewById(R.id.spinner1);
     		buttonShow = (Button) findViewById(R.id.buttonShow);
     		
     	 
     		buttonShow.setOnClickListener(new View.OnClickListener() {
     		  public void onClick(View v) {
     			  
     			 value = spinner1.getSelectedItem().toString();
     			  if (value == "Kampala")
     			  {
     				 showresult.setText(Kampala);
     			  }
     			 
     			  else if (value == "Gulu")
     			  {
     				  showresult.setText(Gulu);
     			  }
     			 else if (value == "Kira")
    			  {
    				  showresult.setText(Kira);
    			  }
     			else if (value == "Lira")
  			  {
  				  showresult.setText(Lira);
  			  }
     			else if (value == "Mbale")
    			  {
    				  showresult.setText(Mbale);
    			  }
     			else if (value == "Nansana")
  			  {
  				  showresult.setText(Nansana);
  			  }
     			else if (value == "Jinja")
    			  {
    				  showresult.setText(Jinja);
    			  }
     			else if (value == "Mbarara")
  			  {
  				  showresult.setText(Mbarara);
  			  }
     			else if (value == "Entebbe")
    			  {
    				  showresult.setText(Entebbe);
    			  }
     			else if (value == "Kasese")
  			  {
  				  showresult.setText(Kasese);
  			  }
     			else if (value == "Masaka")
    			  {
    				  showresult.setText(Masaka);
    			  }
     			else if (value == "Soroti")
  			  {
  				  showresult.setText(Soroti);
  			  }
     			else if (value == "Njeru")
    			  {
    				  showresult.setText(Njeru);
    			  }
     			else if (value == "Kitgum")
  			  {
  				  showresult.setText(Kitgum);
  			  }
     			else if (value == "Arua")
    			  {
    				  showresult.setText(Arua);
    			  }
     			else if (value == "Mukono")
  			  {
  				  showresult.setText(Mukono);
  			  }
     			else if (value == "Iganga")
    			  {
    				  showresult.setText(Iganga);
    			  }
     			else if (value == "Koboko")
  			  {
  				  showresult.setText(Koboko);
  			  }
     			else if (value == "Busia")
    			  {
    				  showresult.setText(Busia);
    			  }
     			else if (value == "Fort Portal")
  			  {
  				  showresult.setText(FortPortal);
  			  }
     			else if (value == "Kabale")
    			  {
    				  showresult.setText(Kabale);
    			  }
     			else if (value == "Masindi")
  			  {
  				  showresult.setText(Masindi);
  			  }
     			else if (value == "Tororo")
    			  {
    				  showresult.setText(Tororo);
    			  }
     			else if (value == "Hoima")
  			  {
  				  showresult.setText(Hoima);
  			  }
     			else if (value == "Mityana")
    			  {
    				  showresult.setText(Mityana);
    			  }
     	 //final else can come in action
     			
     		    
     		  }
     	 
     		});
     	
     	
     	

         //fetch the map view from the layout
          mapView = (MapView) findViewById(R.id.mapview);
          showresult = (TextView) findViewById(R.id.showresult); 
          buttonBack = (Button) findViewById(R.id.buttonBack);
          buttonExit = (Button) findViewById(R.id.buttonExit);
          
          
          //buttons actions
      	buttonBack.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		Intent i = new Intent(getApplicationContext(),
    					MainActivity.class);
    			startActivity(i);
    			finish();
    		} 
    	});
       	
       	buttonExit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
    		} 
    	}); 
          
         

         //make available zoom controls
         mapView.setBuiltInZoomControls(true);
         // satellite view
         mapView.setSatellite(true);
         
         //mapView.setStreetView(true);



        // Use the location manager through GPS
        locManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
        locManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, 0,
                0, (LocationListener) this);

        //get the current location or (last known location) from the location manager
        Location location = locManager.getLastKnownLocation(LocationManager.GPS_PROVIDER);


            //if location found display as a toast the current latitude and longitude
        if (location != null) {

            Toast.makeText(
                    this,
                    "Current location:\nLatitude: " + location.getLatitude()
                            + "\n" + "Longitude: " + location.getLongitude(),
                    Toast.LENGTH_LONG).show();
            
            
            //getting the current location by physical appearance
            a = location.getLatitude();
             b = location.getLongitude();
            if((a > 0 && a <= 0.8) && (b > 32 && b <= 32.9)){
            	showresult.setText(Kampala);
            }
            //else if in action
            else if((a > 2.6 && a <= 2.9) && (b > 32 && b <= 32.5)){
            	showresult.setText(Gulu);
            }
            else if((a == 0.39722) && (b == 32.63889)){
            	showresult.setText(Kira);
            }
            else if((a > 2.2 && a <= 2.6) && (b > 32.3 && b <= 32.7)){
            	showresult.setText(Lira);
            }
            else if((a > 1 && a <= 1.4) && (b > 34 && b <= 34.5)){
            	showresult.setText(Mbale);
            }
            else if((a == 0.3700) && (b == 32.5250)){
            	showresult.setText(Nansana);
            }
            else if((a > 0.5 && a <= 0.9) && (b > 33 && b <= 33.8)){
            	showresult.setText(Jinja);
            }
            else if((a > 0.3 && a <= 0.9) && (b > 30 && b <= 31)){
            	showresult.setText(Mbarara);
            }
            else if((a == 0.0667) && (b == 32.4500)){
            	showresult.setText(Entebbe);
            }
            else if((a > 0 && a <= 0.4) && (b > 30 && b <= 31)){
            	showresult.setText(Kasese);
            }
            else if((a > 0.2 && a <= 0.5) && (b > 31.3 && b <= 32)){
            	showresult.setText(Masaka);
            }
            else if((a > 1.3 && a <= 1.9) && (b > 33 && b <= 33.9)){
            	showresult.setText(Soroti);
            }
            else if((a > 0.1 && a <= 0.8) && (b >= 33 && b <= 33.5)){
            	showresult.setText(Njeru);
            }
            else if((a > 3.3 && a <= 3.8) && (b >= 33 && b <= 33.4)){
            	showresult.setText(Kitgum);
            }
            else if((a > 2.9 && a <= 3.3) && (b >= 30 && b <= 31.3)){
            	showresult.setText(Arua);
            }
            else if((a == 0.2500) && (b == 32.9167)){
            	showresult.setText(Mukono);
            }
            else if((a > 0.5 && a <= 0.9) && (b > 33 && b <= 33.9)){
            	showresult.setText(Iganga);
            }
            else if((a > 3.2 && a <= 3.7) && (b > 30.5 && b <= 31.2)){
            	showresult.setText(Koboko);
            }
            else if((a > 0.4 && a <= 0.8) && (b > 33.9 && b <= 34.5)){
            	showresult.setText(Busia);
            }
            else if((a > 0.4 && a <= 0.8) && (b > 30 && b <= 30.8)){
            	showresult.setText(FortPortal);
            }
            else if((a > 1.1 && a <= 1.4) && (b > 29.7 && b <= 30.1)){
            	showresult.setText(Kabale);
            }
            else if((a > 1.4 && a <= 1.8) && (b > 31.3 && b <= 31.9)){
            	showresult.setText(Masindi);
            }
            else if((a > 0.4 && a <= 0.8) && (b > 34 && b <= 34.7)){
            	showresult.setText(Tororo);
            }
            else if((a > 1.2 && a <= 0.8) && (b > 30.8 && b <= 31.4)){
            	showresult.setText(Hoima);
            }
            else if((a > 0.2 && a <= 0.6) && (b > 32 && b <= 32.5)){
            	showresult.setText(Mityana);
            }
            else{
            	showresult.setText("Agro Ecological Information of this place is not available." + "\n" + 
            "This can be due to:" +"\n" +
            			"-using the app Outside East Africa" +"\n" +
            			"\t"+"\t"+"Or" +"\n" +
            			"-The Location has no Agricultural Information but it is within East Africa");
            }
            
            
        } 
        
        
        else {

            Toast.makeText(this, "Cannot fetch current location!",
                    Toast.LENGTH_LONG).show();
        }
        
        //latitude and longitude of a current location obtained from GPS auto-detect lat and long display it
        double lat = a;
        double lon = b;

        //create geo point
        point = new GeoPoint((int)(lat * 1E6), (int)(lon *1E6));

        //get the MapController object
        MapController controller = mapView.getController();

        //animate to the desired point
        controller.animateTo(point);

        //set the map zoom to 18
        // zoom 1 is top world view
        controller.setZoom(18);
        
        
 
        //---Add a location marker---
        MapOverlay mapOverlay = new MapOverlay();
        List<Overlay> listOfOverlays = mapView.getOverlays();
        listOfOverlays.clear();
        listOfOverlays.add(mapOverlay);   
        
        //invalidate the map in order to show changes
        mapView.invalidate();
        
//when the current location is found – stop listening for updates (preserves battery)
        locManager.removeUpdates(this);
    }

     	 

    /* When the activity starts up, request updates */
    @Override
    protected void onResume() {
        super.onResume();
        locManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, 0,
                0, this);
    }

    @Override
    protected void onPause() {
        super.onPause();
        locManager.removeUpdates(this); //activity pauses => stop listening for updates
    }
        @Override
    public void onLocationChanged(Location location) {

    }


    @Override
    public void onProviderDisabled(String provider) {

    }

    @Override
    public void onProviderEnabled(String provider) {

    }

    @Override
    public void onStatusChanged(String provider, int status, Bundle extras) {

    }

       

    @Override
    protected boolean isRouteDisplayed() {

        return false;

    }
    
    
}




