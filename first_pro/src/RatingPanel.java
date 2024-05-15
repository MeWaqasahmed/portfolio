import java.awt.GridLayout;
import javax.swing.*;

public class RatingPanel extends JPanel {
    private JTextField userIdField;
    private JTextField ratingField;
    private JButton submitRatingButton;

    public RatingPanel() {
        setLayout(new GridLayout(3, 2));  // Grid layout for organized form structure

        // Adding user ID input
        add(new JLabel("User ID:"));
        userIdField = new JTextField();
        add(userIdField);

        // Adding rating input
        add(new JLabel("Rating (1-5):"));
        ratingField = new JTextField();
        add(ratingField);

        // Adding submit button
        submitRatingButton = new JButton("Submit Rating");
        add(submitRatingButton);

        // Action Listener for button
        submitRatingButton.addActionListener(e -> submitRating());
    }
 
    private void submitRating() {
        String userId = userIdField.getText();
        String rating = ratingField.getText();
        // Here, add logic to process the rating data
        JOptionPane.showMessageDialog(this, "Rating submitted for user ID: " + userId + " with rating: " + rating);
    }
}

