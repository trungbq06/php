package quangnd.com.entity;

/**
 * @author QUANGND
 */
public class Property {

    private String name;
    private Object object;

    public Property(String name, Object object) {
        this.name = name;
        this.object = object;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Object getObject() {
        return object;
    }

    public void setObject(Object object) {
        this.object = object;
    }

    @Override
    public String toString() {
        return name;
    }

}
