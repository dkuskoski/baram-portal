package mk.com.barambe;

import java.util.Arrays;
import java.util.LinkedList;
import java.util.List;

public class BaramConstants {

    public final static String HOME = "Дома";
    public final static String MAKEDONIJA = "Македонија";
    public final static String EKONOMIJA = "Економија";
    public final static String SVET = "Свет";
    public final static String HRONIKA = "Хроника";
    public final static String SPORT = "Спорт";
    public final static String ZABAVA = "Забава";
    public final static String KULTURA = "Култура";
    public final static String ADULT = "18+";
    public static final String API_USERNAME = "dkuskoski@hotmail.com";
    public static final String API_PASSWORD = "dare123";
    public static final String MOST_VIEWED = "mostViewed";

    public static List<String> getCategories(){
        return Arrays.asList(HOME, MAKEDONIJA, EKONOMIJA, SVET,
                HRONIKA, SPORT, ZABAVA, KULTURA, ADULT);
    }
}
